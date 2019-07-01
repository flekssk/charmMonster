<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Product\Product;
use App\Models\Product\ProductsImage;
use App\Repositories\Category\CategoriesRepository;
use App\Repositories\Product\ProductRepository;
use App\Requests\Admin\Product\ProductFormRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class ProductController extends AdminController
{
    public function index(Request $request)
    {
        return view(
            'admin.product.index',
            [
                'products'   => ProductRepository::withFilters(collect($request->get('filters', []))),
                'categories' => CategoriesRepository::all(),
            ]
        );
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function create()
    {
        return view('admin.product.create', ['categories' => CategoriesRepository::all()]);
    }

    public function store(ProductFormRequest $request)
    {
        $product = new Product();

        /** @var Collection $images */
        $images = collect($request->images);

        $product->name        = $request->name;
        $product->category_id = $request->category_id;
        $product->price       = $request->price;
        $product->image       = $images->shift();
        $product->active      = $request->active == 'on' ? true : false;
        $product->on_main     = $request->on_main == 'on' ? true : false;

        if ($product->save() && $request->has('images')) {
            foreach ($request->images as $uploadedImage) {
                $image             = new ProductsImage();
                $image->image      = $uploadedImage;
                $image->product_id = $product->id;

                $image->save();
            }
        }

        return redirect(action('Admin\Product\ProductController@index'));
    }

    public function edit(Product $product)
    {
        $categories = CategoriesRepository::all();

        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function update(Product $product, ProductFormRequest $request)
    {
        $product->name = $request->name;

        /** @var Collection $images */
        $images = collect($request->images);

        $product->name        = $request->name;
        $product->category_id = $request->category_id;
        $product->price       = $request->price;
        $product->image       = $images->shift();
        $product->active      = $request->active == 'on' ? true : false;
        $product->on_main     = $request->on_main == 'on' ? true : false;

        if ($product->save()) {
            $existedImages = $product->images->keyBy('image');

            foreach ($images as $uploadedImage) {
                if (!$existedImages->has($uploadedImage)) {
                    $image             = new ProductsImage();
                    $image->image      = $uploadedImage;
                    $image->product_id = $product->id;

                    $image->save();
                } else {
                    $existedImages->forget($uploadedImage);
                }
            }

            foreach ($existedImages as $item) {
                $item->delete();
            }
        }

        return redirect(action('Admin\Product\ProductController@index'));
    }

    public function destroy(Product $product)
    {
        /** @var ProductsImage $image */
        foreach ($product->images as $image) {
            $image->delete();
        }

        $product->delete();

        return redirect(action('Admin\Product\ProductController@index'));
    }

    public function destroyImage(Request $request)
    {
        return JsonResource::make(
            [
                'success' => ProductsImage::getByImage($request->file)->delete(),
            ]
        );
    }
}
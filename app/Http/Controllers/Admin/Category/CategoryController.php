<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Product\CategoriesImage;
use App\Models\Product\Category;
use App\Models\Product\ProductsImage;
use App\Repositories\Category\CategoriesRepository;
use App\Requests\Admin\Product\CategoryFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoryController extends AdminController
{
    public function index(Request $request)
    {
        return view('admin.category.index', ['categories' => CategoriesRepository::all()]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $category = new Category();

        $images            = collect($request->images);
        $category->name    = $request->name;
        $category->active  = $request->active == 'on' ? true : false;
        $category->on_main = $request->on_main == 'on' ? true : false;
        $category->image   = $images->shift();

        if ($category->save()) {
            foreach ($images as $uploadedImage) {
                $image              = new CategoriesImage();
                $image->image       = $uploadedImage;
                $image->category_id = $category->id;

                $image->save();
            }
        }

        return redirect(action('Admin\Category\CategoryController@index'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Category $category, CategoryFormRequest $request)
    {
        $images = collect($request->images);

        $category->name    = $request->name;
        $category->active  = $request->active == 'on' ? true : false;
        $category->on_main = $request->on_main == 'on' ? true : false;
        $category->image   = $images->shift();

        if ($category->save()) {
            $existedImages = $category->images->keyBy('image');

            foreach ($images as $uploadedImage) {
                if (!$existedImages->has($uploadedImage)) {
                    $image              = new CategoriesImage();
                    $image->image       = $uploadedImage;
                    $image->category_id = $category->id;

                    $image->save();
                } else {
                    $existedImages->forget($uploadedImage);
                }
            }

            /** @var CategoriesImage $item */
            foreach ($existedImages as $item) {
                $item->delete();
            }
        }

        return redirect(action('Admin\Category\CategoryController@index'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect(action('Admin\Category\CategoryController@index'));
    }
}

<?php

namespace Backend\Http\Controllers\Catalog;

use App\Models\Product\Product;
use App\Models\Product\ProductComplectation;
use App\Models\Product\ProductComplectationCategory;
use App\Repositories\Category\CategoriesRepository;
use Backend\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends AdminController
{
    public function complectationTab(Product $product)
    {
        $addComplectionLink = url('admin', ['product_id' => $product->product_id]);
        $categories = CategoriesRepository::allWithout(
            $product->complectation->getCategories()->toArray()
        );

        return view(
            'catalog.product_complectation_tab',
            compact('addComplectionLink', 'product', 'categories')
        );
    }

    public function storeComplectation(Request $request)
    {
        $complectationCategory = new ProductComplectation();

        $complectationCategory->product_id = $request->product_id;
        $complectationCategory->name = $request->name;

        return [
            'success' => $complectationCategory->save(),
        ];
    }

    public function storeComplectationCategory(Request $request)
    {
        $complectionCategory = new ProductComplectationCategory();

        $complectionCategory->complection_id = $request->complectionId;
        $complectionCategory->category_id = $request->categoryId;

        return JsonResource::make(
            [
                'success' => $complectionCategory->save(),
            ]
        );
    }

    public function storeSelectedComplectionProduct(Request $request)
    {
        $complection = ProductComplectationCategory::getByComplectionAndCategory(
            $request->complectionId,
            $request->categoryId
        );

        $complection->selected_product_id = $request->productId;

        return JsonResource::make(
            [
                'success' => $complection->save(),
            ]
        );
    }

    public function destroyComplection(ProductComplectation $complectation)
    {
        return JsonResource::make(
            [
                'success' => $complectation->delete(),
            ]
        );
    }

    public function destroyComplectionCategory(ProductComplectationCategory $complectationCategory)
    {
        return JsonResource::make(
            [
                'success' => $complectationCategory->delete(),
            ]
        );
    }
}

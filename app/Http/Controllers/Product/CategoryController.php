<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Repositories\Category\CategoriesRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        return view('category.index', ['categories' => CategoriesRepository::all()]);
    }

    public function products(Request $request, Category $category)
    {
        $filters = collect($request->get('filter', []));

        $filters->put('minPrice', $category->products->getMinPrice());
        $filters->put('maxPrice', $category->products->getMaxPrice());

        if($filters->has('price')) {
            $prices = explode(',', $filters->get('price'));
            $filters->put('minPrice', $prices[0]);
            $filters->put('maxPrice', $prices[1]);
        }

        return view('category.products', ['products' => $category->products, 'filters' => $filters]);
    }
}
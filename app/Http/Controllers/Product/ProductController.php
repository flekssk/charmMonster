<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Repositories\Product\ProductRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('product.index', ['products' => ProductRepository::all()]);
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function fastLook(Product $product)
    {
        return JsonResponse::create(['content' => view('product.fastShow', compact('product'))->render()]);
    }
}
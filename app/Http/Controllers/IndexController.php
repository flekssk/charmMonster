<?php

namespace App\Http\Controllers;

use App\Repositories\Blog\ArticlesRepository;
use App\Repositories\Category\CategoriesRepository;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Settings\MainSliderImagesRepositories;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'index',
            [
                'products'     => ProductRepository::getOnMain(),
                'categories'   => CategoriesRepository::getOnMain(),
                'sliderImages' => MainSliderImagesRepositories::all(),
                'posts'        => ArticlesRepository::getOnMain(),
            ]
        );
    }
}
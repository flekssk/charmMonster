<?php

namespace App\Http\Controllers;

use App\Models\Content\Translation;
use App\Repositories\Blog\ArticlesRepository;
use App\Repositories\Category\CategoriesRepository;
use App\Repositories\Content\MainSliderImagesRepository;
use App\Repositories\Product\ProductRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'index',
            [
                'products' => ProductRepository::getOnMain(),
                'categories' => CategoriesRepository::getOnMain(),
                'sliderImages' => MainSliderImagesRepository::getBySliderId(config('pageContents.mainPage.sliderId')),
                'posts' => ArticlesRepository::getOnMain(),
                'mainText' => Translation::findByKey('mainTitleText'),
                    'mainVideoLink' => Translation::findByKey('mainVideoLink', 'test'),
            ]
        );
    }
}
<?php
/**
 * @var \App\Repositories\Category\CategoriesRepository $categories
 */
?>

@extends('layouts.base.layout')

@push('after_scripts')
    <script src="{{ asset('js/jquery.glide.min.js') }}"></script>
    <script src="{{ asset('js/main/mainSlider.js') }}"></script>
@endpush

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/mainSlider.css') }}">
@endpush

@section('content')
    <div class="container-fluid contentContainer" style="overflow: hidden;">
        <div class="container">
            <div class="row aboutCompanyContainer">
                <div class="col-6 aboutCompanyText">
                    <div class="mainTitle">
                        <h1 class="ukrainianTitle">О компании много</h1>
                    </div>
                    <div class="mainText">
                        Краткое описание компании
                        Краткая информация о компании
                        Информацияя
                        Краткое описание компании
                        Краткая информация о компании
                        Информацияя

                    </div>
                </div>
                <div class="col-6 videoBlock">
                    <div class="video">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RNbXm8WKmow"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row categoriesContainer">
                <div class="categoriesBackground">

                </div>
                @foreach($categories->items() as $category)
                    <div class="categoryBox col-4" data-link="{{ action('Product\CategoryController@products', ['category' => $category->category_id]) }}">
                        <div class="col-12 category">
                            <div class="col-12 title">
                                {{ $category->description->name }}
                            </div>
                            <div class="col-12 image">
                                <img src="{{ getImagePath($category->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 sliderContainer">
                <div class="sliderBackground">
                    <div class="sliderBackgroundImage"></div>
                </div>
                <div class="imagesContainer slider">
                    <ul class="slides">
                        <li class="slide">
                            <div class="box" style="background-color: #1abc9c;">
                                <img src="{{ getImagePath('catalog/rv7k9hmhonc.jpg') }}" alt="">
                            </div>
                            <div class="box" style="background-color: #1abc9c;">
                                <img src="{{ getImagePath('catalog/rv7k9hmhonc.jpg') }}" alt="">
                            </div>
                            <div class="box" style="background-color: #1abc9c;">
                                <img src="{{ getImagePath('catalog/rv7k9hmhonc.jpg') }}" alt="">
                            </div>
                            <div class="box" style="background-color: #1abc9c;">
                                <img src="{{ getImagePath('catalog/rv7k9hmhonc.jpg') }}" alt="">
                            </div>
                        </li>
                        @foreach($sliderImages->items() as $sliderImage)
                            <li class="slide">
                                <div class="box" style="background-color: #1abc9c;">
                                    <img src="{{ $sliderImage->image }}" alt="">
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row blogPostsContainer">
                @foreach($posts->items() as $post)
                    <div class="col-4 post">
                        <div class="col-12 title">
                            {{ $post->title }}
                        </div>
                        <div class="col-12 content">
                            <div class="image col-12">
                                <img src="{{ $post->images->first()->image }}" alt="">
                            </div>
                            <div class="text">
                                {{ strip_tags($post->content) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<?php
/**
 * @var \App\Repositories\Category\CategoriesRepository $categories
 */
?>

@extends('layouts.base.layout')

@push('after_scripts')
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
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="carouselIndicator active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="carouselIndicator"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ getImagePath('catalog/444.jpg') }}" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ getImagePath('catalog/321.jpg') }}" alt="">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row blogPostsContainer">
                @foreach($posts->items() as $post)
                    <div class="col-4 post" data-link="{{ action('Blog\BlogController@show', ['article' => $post->article_id]) }}">
                        <div class="col-12 title">
                            {{ $post->description->name }}
                        </div>
                        <div class="col-12 content">
                            <div class="image col-12">
                                <img src="{{ getImagePath($post->image) }}" alt="">
                            </div>
                            <div class="text">
                                {{ $post->description->meta_description }}
                            </div>
                            <b>{{ \Illuminate\Support\Carbon::make($post->date_added)->format('m-d-Y') }}</b>
                            <b>
                                <a style="float: right;" href="{{ action('Blog\BlogController@show', ['article' => $post->article_id]) }}">
                                    Подробнее
                                </a>
                            </b>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

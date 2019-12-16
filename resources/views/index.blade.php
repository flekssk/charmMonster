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
                        <h1 class="ukrainianTitle">
                            {{ translation('mainTitle', '') }}
                        </h1>
                    </div>
                    <div class="mainText">
                        {{ $mainText }}
                    </div>
                </div>
                <div class="col-6 videoBlock">
                    <div class="video">
                        <iframe src="{{ translation('mainVideoLink', 'test') }}?wmode=transparent"
                                width="100%"
                                height="250px"
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
                    <div class="categoryBox col-4"
                         data-link="{{ action('Product\CategoryController@products', ['category' => $category->category_id]) }}">
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
                            <?php $first = true; ?>
                            @foreach($sliderImages->items()->all() as $id => $image)
                                <li data-target="#carouselExampleIndicators"
                                    data-slide-to="{{ $id }}"
                                    class="carouselIndicator {{ $first ? 'active' : '' }}"
                                >
                                </li>
                                <?php $first = false; ?>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            <?php $first = true; ?>
                            @foreach($sliderImages->items()->all() as $image)
                                <div class="carousel-item {{ $first ? 'active' : '' }}">
                                    <img src="{{ getImagePath($image->image) }}" alt="">
                                </div>
                                <?php $first = false; ?>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row blogPostsContainer">
                @foreach($posts->items() as $post)
                    <div class="post slick-slide"
                         data-link="{{ action('Blog\BlogController@show', ['article' => $post->article_id]) }}">
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
                                <a style="float: right;"
                                   href="{{ action('Blog\BlogController@show', ['article' => $post->article_id]) }}">
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

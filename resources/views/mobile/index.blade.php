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
    <div class="mobileContent" style="overflow: hidden;">
        <div class="categories">
            @foreach($categories->items()->all() as $category)
                <a href="{{ action('Product\CategoryController@products', ['category' => $category->category_id]) }}">
                    <div class="categoryTitle">
                        {{ mb_strtoupper($category->description->name) }}
                    </div>
                    <div class="image">
                        <img src="{{ getImagePath($category->image) }}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
        <div class="slider">
            <div class="sliderContainer">
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
                            <div class="carousel-item {{ $first ? 'active' : '' }}" style="width: 100%;">
                                <img src="{{ getImagePath($image->image) }}" alt="" style="width: 100%;">
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
    </div>
@endsection

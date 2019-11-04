<?php
/**
 * @var \App\Repositories\Product\ProductRepository $products
 */

use Illuminate\Support\Arr;
?>

@extends('layouts.base.layout')

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/mainSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/product.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@push('after_scripts')
    <script src="{{ asset('js/main/products.js') }}"></script>
    <script src="{{ asset('js/main/product.js') }}"></script>
@endpush

@section('content')
    <div class="container-fluid contentContainer">
        <div class="container">
            <div class="row productsContainer">
                <div class="col-3 filterContainer">
                    <form method="get">
                        <div class="filtersBackground"></div>
                        <div class="form-group searchFilter">
                            <button class="form-control submitSearch">
                                Поиск
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <div class="priceFilter">
                            <label for="" style="color: #995C5C;">Цена</label>
                            <div class="slider-wrapper slider-danger slider-strips slider-ghost" style="height: 50px;">
                                <input class="input-range" id="priceRange" type="text" data-slider-step="1"
                                       data-slider-value="{{ $filters->get('minPrice') ?? $products->getMinPrice() }}, {{ $filters->get('maxPrice') ?? $products->getMaxPrice() }}"
                                       data-slider-min="{{ $products->getMinPrice() }}"
                                       data-slider-max="{{ $products->getMaxPrice() }}"
                                       data-slider-range="true"
                                       name="filter[price]"
                                       data-slider-tooltip_split="true"/>
                            </div>
                            <div class="row justify-content-between">
                                <div>
                                    От <input id="minPrice" name="filter[minPrice]"
                                              class="form-control priceFilterField"
                                              value="{{ $filters->get('minPrice') ?? $products->getMinPrice() }}" disabled>
                                </div>
                                <div>
                                    До
                                    <input id="maxPrice" name="filter[maxPrice]" class="form-control priceFilterField"
                                           value="{{ $filters->get('maxPrice') ?? $products->getMaxPrice() }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group-toggle tagsFilters" data-toggle="buttons">
                            @foreach($products->getTags() as $id => $tag)
                                <?php
                                $selected = $filters->has('tags')
                                    && Arr::get($filters->get('tags'), $id, '') == 'on';
                                ?>
                                <div class="col-12 btn btn-secondary tagFilter {{ $selected ? 'active' : '' }}">
                                    {{ $tag }}
                                    <input
                                            type="checkbox"
                                            name="filter[tags][{{ $id }}]"
                                            id="option1"
                                            autocomplete="off"
                                            {{ $selected ? 'checked' : '' }}
                                    >
                                </div>
                            @endforeach
                        </div>
                    </form>
                </div>
                <div class="row col-9 productContainer">
                    <?php /** @var \App\Models\Product\Product $product */ ?>
                    @foreach($products->filtrate($filters) as $product)
                        <div class="col-4 product">
                            <div class="productContent">
                                <div class="price">
                                    {{ number_format(round($product->getFullPrice()), 0, '.', ' ') }} <i class="fa fa-ruble"></i>
                                </div>
                                <div class="image">
                                    <img src="{{ getImagePath($product->image) }}" alt="">
                                    <div class="productControl">
                                        <div class="buttons">
                                            <a class="btn btn-product-control"
                                               href="{{ action('Product\ProductController@show', ['product' => $product->product_id]) }}"
                                            >
                                                Просмотр
                                                <i class="icon fa fa-eye"></i>
                                            </a>
                                            <a class="btn btn-product-control fastLook"
                                               data-link="{{ action('Product\ProductController@fastLook', ['product' => $product->product_id]) }}"
                                            >
                                                Быстрый просмотр
                                                <i class="icon fa fa-eye"></i>
                                            </a>
                                            <a class="btn btn-product-control">
                                                Быстрый заказ
                                                <i class="icon fa fa-shopping-cart"></i>
                                            </a>
                                            <a class="btn btn-product-control addToCart"
                                               data-product-id="{{ $product->product_id }}"
                                               data-complection="{{ $product->getDefaultComplectionJson() }}"
                                            >
                                                В корзину
                                                <i class="icon fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title main">
                                    <span>{{ $product->description->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


<?php
/**
 * @var \App\Repositories\Product\ProductRepository $products
 */

use Illuminate\Support\Arr;
?>

@extends('layouts.base.layout')

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/mainSlider.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')
    <div class="contentContainer">
        <div class="container">
            <div class="productsContainer">
                <div class="productContainer">
                    <?php /** @var \App\Models\Product\Product $product */ ?>
                    @foreach($products->filtrate($filters) as $product)
                        <div class="product">
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
                                            <a
                                                    class="btn btn-product-control fastOrder"
                                                    data-product-id="{{ $product->product_id }}"
                                            >
                                                Быстрый заказ
                                                <i class="icon fa fa-shopping-cart"></i>
                                            </a>
                                            <a class="btn btn-product-control addToCart"
                                               data-product-id="{{ $product->product_id }}"
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


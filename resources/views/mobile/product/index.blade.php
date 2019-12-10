<?php
/**
 * @var \App\Repositories\Product\ProductRepository $products
 */
?>

@extends('layouts.base.layout')

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/mobile/mainSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile/products.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@push('after_scripts')
    <script src="{{ asset('ProductsProducts.js') }}"> </script>
@endpush

@section('content')
    <div class="contentContainer">
        <div class="container">
            <h1 class="ukrainianTitle"></h1>
            <div class="productsContainer">
                <div class="productContainer">
                    @foreach($products as $product)
                        <div class="product">
                            <div class="productContent">
                                <div class="image">
                                    <img src="{{ getImagePath($product->image) }}" alt="">
                                </div>
                                <div class="title">
                                    <span>{{ $product->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


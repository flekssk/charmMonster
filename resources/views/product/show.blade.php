<?php
/**
 * @var \App\Models\Product\Product $product
 */
?>

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/product.css') }}">
@endpush


@push('after_scripts')
    <script src="{{ asset('js/main/product.js') }}"></script>
@endpush

@extends('layouts.base.layout')

@section('content')
    <div class="contentContainer">
        <div class="container">
            <div class="row productPage">
                <div class="images">
                    <div class="mainImage">
                        <img src="{{ getImagePath($product->image) }}" alt="">
                    </div>
                    <div class="imagesList">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($product->images as $image)
                                    <div class="carousel-item active image">
                                        <img src="{{ getImagePath($image->image) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="descriptionBackground"></div>
                    <div class="ukrainianTitle mainTitle title">
                        {{ $product->description->name }}
                    </div>
                    <div class="text">
                        <div class="textBackground">

                        </div>
                        <div class="description">
                            <div>
                                <b>Описание:</b>
                                {!! html_entity_decode($product->description->description, ENT_QUOTES, 'UTF-8') !!}
                            </div>
                            <div>
                                <b>Характеристики:</b>
                                <ul style="list-style: none; margin-top: 10px; padding-left: 0;">
                                    @foreach($product->attributes as $attribute)
                                        <li>
                                            <b>{{ $attribute->attribute->description->name }}:</b> {{ $attribute->text }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row container" style="text-align: center; margin: 0 auto;">
                        <div>
                            <a data-product-id="{{ $product->product_id }}" class="addToCart controlButton">В
                                корзину</a>
                        </div>
                        <div>
                            <a href="" class="controlButton">Оформить заказ</a>
                        </div>
                        <div>
                            <a href="" class="controlButton">
                                <span class="fa fa-heart-o"></span>В понравившиеся
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
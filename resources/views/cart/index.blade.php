<?php
/**
 * @var \App\Repositories\Product\ProductRepository $products
 */
?>

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/cart.css') }}">
@endpush
@extends('layouts.base.layout')

@section('content')
    <div class="contentContainer">
        <div class="container">
            <div class="row cartProducts">
                <div class="containerBackground"></div>
                @foreach($products->items() as $product)
                    <div class="row col-12 cartProductContainer">
                        <div class="cartProductBackground"></div>
                        <div class="col-3">
                            <div class="imageContainer">
                                <div class="image">
                                    <img src="{{ getImagePath($product->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="information">
                                <div class="mainTitle name">
                                    {{ $product->description->name }}
                                    <span class="price">
                                        {{ (int) $product->price }} р.
                                    </span>
                                </div>
                                <span class="fa fa-trash delete"></span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row container justify-content-between">
                    <div class="cartControl">
                        <div class="total">
                            Сумма: <span class="price">{{ \App\Extensions\Cart\CartFacade::totalPrice() }} р.</span>
                        </div>
                    </div>
                    <div class="cartControl">
                        <div class="buttonContainer">
                            <a style="display: block;">
                                Оформить заказ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
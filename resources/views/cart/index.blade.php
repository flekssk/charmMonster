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
                    <div class="row col-12 cartProductContainer" data-product="{{ $product->product->product_id }}">
                        <div class="cartProductBackground"></div>
                        <div class="col-3">
                            <div class="imageContainer">
                                <div class="image">
                                    <img src="{{ getImagePath($product->product->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="information">
                                <div class="quantity">
                                    <div class="qty productCounter">
                                        <span class="btn clickable minus" data-counter="product{{ $product->product->product_id }}">
                                            -
                                        </span>
                                        <input
                                                type="number"
                                                class="count"
                                                name="qty"
                                                value="{{ $product->count }}"
                                                data-product="{{ $product->product->product_id }}"
                                                data-counter="product{{ $product->product->product_id }}"
                                        >
                                        <span class="btn clickable plus" data-counter="product{{ $product->product->product_id }}">
                                            +
                                        </span>
                                    </div>
                                </div>
                                <div class="mainTitle name">
                                    {{ $product->product->description->name }}
                                    <span class="price" data-product="{{ $product->product->product_id }}">
                                        {{ (int) $product->totalPrice() }} р.
                                    </span>
                                </div>
                                <span class="fa fa-close delete"></span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row container justify-content-between">
                    <div class="cartControl">
                        <div class="total">
                            Сумма: <span class="price"><span class="totalPrice">{{ \App\Extensions\Cart\CartFacade::totalPrice() }}</span> р.</span>
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
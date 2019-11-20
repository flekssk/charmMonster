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
                        <div class="col-2">
                            <div class="imageContainer">
                                <div class="image">
                                    <img src="{{ getImagePath($product->product->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="information">
                                <div class="mainTitle name">
                                    {{ $product->product->description->name }}
                                    <i class="fa fa-ruble"
                                       style="float: right; font-size: 20px; padding: 7px 0 0 3px;"></i>
                                    <span class="price" data-product="{{ $product->getUniqueId() }}">
                                        {{ (int) $product->totalPrice() }}
                                    </span>
                                </div>
                                <div class="quantity">
                                    <div class="qty productCounter">
                                        <span class="btn clickable minus"
                                              data-counter="product{{ $product->product->product_id }}">
                                            -
                                        </span>
                                        <input
                                                type="number"
                                                class="count"
                                                name="qty"
                                                value="{{ $product->count }}"
                                                data-product="{{ $product->getUniqueId() }}"
                                                data-counter="product{{ $product->getUniqueId() }}"
                                        >
                                        <span
                                                class="btn clickable plus"
                                                data-counter="product{{ $product->getUniqueId() }}"
                                        >
                                            +
                                        </span>
                                    </div>
                                </div>
                                <i class="fa fa-close delete"></i>
                            </div>
                        </div>
                    </div>
                    @if($product->complection)
                        @foreach($product->complection as $complectionProduct)
                            <div class="row col-12 cartProductContainer"
                                 data-product="{{ $complectionProduct->product->product_id }}">
                                <div class="cartProductBackground"></div>
                                <div class="col-2">
                                    <div class="imageContainer">
                                        <div class="image">
                                            <img src="{{ getImagePath($complectionProduct->product->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="information">
                                        <div class="mainTitle name">
                                            {{ $complectionProduct->product->description->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
                <div class="row container justify-content-between">
                    <div class="cartControl">
                        <div class="total">
                            Сумма: <span class="price"><span
                                        class="totalPrice"
                                >
                                    {{ \App\Extensions\Cart\CartFacade::totalPrice() }}
                                </span>
                                <i class="fa fa-ruble" style="float: right; font-size: 14px; padding: 5px 0 0 3px;"></i>
                            </span>
                        </div>
                    </div>
                    <div class="cartControl">
                        <div class="buttonContainer">
                            <a
                                    class="makeOrder"
                                    style="display: block;"
                                    data-products="{{ json_encode($products->productsToOrder()) }}"
                            >
                                Оформить заказ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
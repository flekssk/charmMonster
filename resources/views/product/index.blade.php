<?php
/**
 * @var \App\Repositories\Product\ProductRepository $products
 */
?>

@extends('layouts.base.layout')

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/mainSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/products.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@push('after_scripts')
    <script src="{{ asset('js/main/products.js') }}"></script>
@endpush

@section('content')
    <div class="contentContainer">
        <div class="container">
            <div class="row productsContainer">
                <div class="col-3 filterContainer">
                    <div class="filtersBackground"></div>
                    <div class="form-group searchFilter">
                        <input type="text" class="form-control">
                    </div>
                    <div class="priceFilter">
                        <label for="" style="color: #995C5C;">Цена</label>
                        <div class="slider-wrapper slider-danger slider-strips slider-ghost" style="height: 50px;">
                            <input class="input-range" id="priceRange" type="text" data-slider-step="1"
                                   data-slider-value="500, 10000"
                                   data-slider-min="500" data-slider-max="10000" data-slider-range="true"
                                   data-slider-tooltip_split="true"/>
                        </div>
                        <div class="row justify-content-between">
                            <div>
                                От <input id="minPrice" name="minPrice" class="form-control priceFilterField"
                                          value="500" disabled>
                            </div>
                            <div>
                                До
                                <input id="maxPrice" name="maxPrice" class="form-control priceFilterField"
                                       value="10000" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-9 productContainer">
                    @foreach($products as $product)
                        <div class="col-4 product">
                            <div class="productContent">
                                <div class="image">
                                    <img src="{{ $product->image }}" alt="">
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


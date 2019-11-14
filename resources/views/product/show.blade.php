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
    <script src="{{ asset('js/blowup.js') }}"></script>
@endpush

@extends('layouts.base.layout')

@section('content')
    <div class="contentContainer">
        <div class="container">
            <div class="row productPage">
                <div class="images">
                    <div class="mainImage">
                        <img
                                src="{{ getImagePath($product->image) }}"
                                alt=""
                                data-large="{{ getImagePath($product->image) }}"
                                data-title="Red Valentino"
                                data-help="Используйте колесико мыши для Zoom +/-"
                        >
                    </div>
                    <div class="imagesList">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div>
                                <div class="active image">
                                    <img src="{{ getImagePath($product->image) }}"
                                         alt=""
                                    >
                                </div>
                                @foreach($product->images as $image)
                                    <div class="carousel-item image">
                                        <img src="{{ getImagePath($image->image) }}"
                                             alt=""
                                        >
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="price">
                        <span data-base-price="{{ $product->price }}" class="mainProductPrice">
                            {{ number_format(round($product->getFullPrice()), 0, '.', ' ') }}
                        </span>
                        <i class="fa fa-ruble"></i>
                    </div>
                    <div class="descriptionBackground"></div>
                    <div class="ukrainianTitle mainTitle title">
                        {{ $product->description->name }}
                    </div>
                    <div class="text">
                        <div class="textBackground">
                        </div>
                        <div class="description">
                            <div class="complectationContainer">
                                <?php
                                /**
                                 * @var \App\Models\Product\ProductComplectation $complection
                                 */
                                ?>
                                @foreach($product->complectation->items() as $complection)
                                    <div class="descriptionTitleContainer">
                                        <b class="descriptionTitle">{{ $complection->name }}:</b>
                                    </div>
                                    <div style="display: block; margin-bottom: 10xp;">
                                        <select
                                                data-complection-id="{{ $complection->id }}"
                                                class="complectionCategorySelect"
                                                data-product-id="{{ $product->product_id }}"
                                        >
                                            @foreach($complection->categories as $complectionCategory)
                                                <option value="{{ $complectionCategory->category_id }}">{{ $complectionCategory->category->description->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <?php
                                    $selectedCategory = true;
                                    /**
                                     * @var \App\Models\Product\ProductComplectationCategory $complectionCategory
                                     */
                                    ?>
                                    @foreach($complection->categories as $complectationCategory)
                                        <div
                                                class="complectionCategoryProducts {{ $selectedCategory ? 'selected' : '' }}"
                                                data-category-id="{{ $complectationCategory->category_id }}"
                                                data-complection-id="{{ $complection->id }}"
                                        >
                                            <div
                                                    class="selectedProductName"
                                                    data-category-id="{{ $complectationCategory->category_id }}"
                                                    data-complection-id="{{ $complection->id }}"
                                                    style="display: block; margin-bottom: 5px;"
                                            >
                                                <b>Выбрано:</b>
                                                <span class="name">
                                                    {{ $complectationCategory->selectedProduct->description->name }}
                                                </span>
                                            </div>
                                            <?php
                                            $selected = true;
                                            /**
                                             * @var \App\Models\Product\Product $product
                                             */
                                            ?>
                                            @foreach($complectationCategory->products as $complectionProduct)
                                                <div
                                                        class="complectationProduct {{ $complectationCategory->getSelectedClass($complectionProduct->product_id)  }}"
                                                        data-complection-id="{{ $complection->id }}"
                                                        data-category-id="{{ $complectationCategory->category_id }}"
                                                        data-product-id="{{ $complectionProduct->product_id }}"
                                                        data-price="{{ $complectionProduct->price }}"
                                                        data-main-product="{{ $product->product_id }}"
                                                        data-toggle="tooltip"
                                                        data-placement="bottom"
                                                        title="{{ $complectionProduct->description->name }}"
                                                >
                                                    <img src="{{ getImagePath($complectionProduct->image) }}" alt="">
                                                </div>
                                            @endforeach
                                            <?php $selected = false; ?>
                                        </div>
                                        <?php $selectedCategory = false; ?>
                                    @endforeach
                                @endforeach
                            </div>
                            <div>
                                @if($product->description->description)
                                    <div class="descriptionTitleContainer">
                                        <b class="descriptionTitle">Описание:</b>
                                    </div>
                                    {!! html_entity_decode($product->description->description, ENT_QUOTES, 'UTF-8') !!}
                                @endif
                            </div>
                            <div>
                                @if($product->productAttributes->count() > 0)
                                    <div class="descriptionTitleContainer">
                                        <b class="descriptionTitle">Характеристики:</b>
                                    </div>
                                    <ul style="list-style: none; margin-top: 10px; padding-left: 0;">
                                        @foreach($product->productAttributes as $attribute)
                                            <li>
                                                <b>{{ $attribute->attribute->description->name }}
                                                    :</b> {{ $attribute->text }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row container" style="text-align: center; margin: 0 auto;">
                        <div>
                            <a
                                    data-product-id="{{ $product->product_id }}"
                                    data-complection="{{ $product->getDefaultComplectionJson() }}"
                                    class="addToCart controlButton"
                            >
                                В корзину
                            </a>
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

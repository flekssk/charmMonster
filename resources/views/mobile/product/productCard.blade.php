<?php
/**
 * @var \App\Models\Product\Product $product
 */
?>

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
            <div class="ukrainianTitle mainTitle title">
                {{ $product->description->name }}
            </div>
            <div class="description">
                <div class="text">
                    <div class="textBackground">
                    </div>
                    <div class="description">
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
            </div>
            <div class="price">
                        <span data-base-price="{{ $product->price }}" class="mainProductPrice">
                            {{ number_format(round($product->getFullPrice()), 0, '.', ' ') }}
                        </span>
                <i class="fa fa-ruble"></i>
            </div>
            <div style="text-align: center; margin: 0 auto;">
                <div style="margin-bottom: 20px;">
                    <a
                            data-product-id="{{ $product->product_id }}"
                            data-complection="{{ $product->getDefaultComplectionJson() }}"
                            class="addToCart controlButton"
                    >
                        В корзину
                    </a>
                </div>
                <div style="margin-bottom: 20px;">
                    <a class="controlButton fastOrder" data-product-id="{{ $product->product_id }}">
                        Оформить заказ
                    </a>
                    <a
                            class="controlButton addToLiked"
                            data-product-id="{{ $product->product_id }}"
                    >
                        <i class="fa fa-heart" style="font-size: 14px; margin-right: 5px;"></i>
                        Понравилось
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
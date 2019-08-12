<div class="row productPage productContainer" style="margin-top: 10px;">
    <div class="images">
        <div class="mainImage">
            <img src="{{ getImagePath($product->image) }}" alt="">
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
        <div class="descriptionBackground"></div>
        <div class="ukrainianTitle mainTitle title">
            {{ $product->description->name }}
        </div>
        <div class="text">
            <div class="textBackground">

            </div>
            <div class="description">
                <b>Описание:</b>
                {!! html_entity_decode($product->description->description, ENT_QUOTES, 'UTF-8') !!}
            </div>
        </div>
        <div class="row container" style="text-align: center; margin: 0 auto;">
            <div>
                <a data-product-id="{{ $product->product_id }}" class="addToCart controlButton">В корзину</a>
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
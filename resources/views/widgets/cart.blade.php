<div class="cartWidgetContainer" data-product-count="{{ $products->count() }}">
    <div class="total">
        <span class="text">В вашей корзине {{ $products->items()->count() }} на сумму :</span>
        <span class="price">{{ $products->totalPrice() }} р</span>
    </div>
    <div class="products">
        @foreach($products->items() as $product)
            <div class="product">
                <div class="col-3">
                    <img src="{{ getImagePath($product->image) }}" alt="">
                </div>
                <div class="col-7">
                    {{ $product->description->name }}
                </div>
                <div class="col-1">
                    <span class="delete removeFromCart" data-product-id="{{ $product->product_id }}">
                        <i class="fa fa-trash"></i>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="control">
        <a class="btn btn-product-control">Оформить заказ</a>
        <a class="btn btn-product-control">Перейти в корзину</a>
    </div>
</div>

<style>
    .headerContainer .headerControlPanel .control.cartControlBlock  .cartButton:before {
        content: '{{ $products->count() }}';
    }
</style>
<div class="cartWidgetContainer" data-product-count="{{ $products->count() }}">
    <div class="total">
        <span class="text">В вашей корзине {{ $products->items()->count() }} на сумму :</span>
        <span class="price"><span class="totalPrice">{{ $products->totalPrice() }}</span> р</span>
    </div>
    <div class="products">
        @foreach($products->items() as $product)
            <div class="product">
                <div class="col-2">
                    <img src="{{ getImagePath($product->product->image) }}" alt="">
                </div>
                <div class="col-5">
                    <a href="{{ action('Product\ProductController@show', ['product' => $product->product->product_id]) }}">
                        {{ $product->product->description->name }}
                    </a>
                </div>
                <div class="col-3">
                    <div class="qty small productCounter">
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
                <div class="col-1">
                    <span class="delete removeFromCart" data-product-id="{{ $product->product->product_id }}">
                        <i class="fa fa-trash"></i>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="control">
        <a class="btn btn-product-control makeOrder">Оформить заказ</a>
        <a class="btn btn-product-control" href="{{ action('Order\CartController@index') }}">Перейти в корзину</a>
    </div>
</div>

<style>
    .headerContainer .headerControlPanel .control.cartControlBlock .cartButton:before {
        content: '{{ $products->count() }}';
    }
</style>
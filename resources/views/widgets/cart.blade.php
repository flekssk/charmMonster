<div class="cartWidgetContainer" data-product-count="{{ $products->count() }}">
    <div class="total">
        <span class="text">В вашей корзине {{ $products->items()->count() }} на сумму :</span>
        <span class="price"><span class="totalPrice">{{ $products->totalPrice() }}</span> р</span>
    </div>
    <div class="products">
        <?php /** @var \App\Extensions\Cart\CartProduct $product */ ?>
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
                        <span class="btn clickable minus" data-counter="product{{ $product->getUniqueId() }}">
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
                        <span class="btn clickable plus" data-counter="product{{ $product->getUniqueId() }}">
                            +
                        </span>
                    </div>
                </div>
                <div class="col-1">
                    <span class="delete removeFromCart" data-product-id="{{ $product->getUniqueId() }}">
                        <i class="fa fa-trash"></i>
                    </span>
                </div>
            </div>
            @if($product->complection->count() > 0)
                <div class="product">
                    <div style="display: block">
                        <?php /** @var \App\Extensions\Cart\CartProduct $complectionProduct */ ?>
                        @foreach($product->complection as $complectionProduct)
                            <div class="col-2">
                                <img src="{{ getImagePath($complectionProduct->image) }}" alt="">
                            </div>
                            <div class="col-9">
                                <a
                                        href="{{ action('Product\ProductController@show', ['product' => $product->product->product_id]) }}"
                                        style="font-size: .9em"
                                >
                                    <b>{{ $complectionProduct->category->category->description->name }}: </b>
                                    {{ $complectionProduct->description->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="control">
        <a class="btn btn-product-control makeOrder">Оформить заказ</a>
        <a class="btn btn-product-control" href="{{ action('Order\CartController@index') }}">В корзину</a>
    </div>
</div>

<style>
    .headerContainer .headerControlPanel .control.cartControlBlock .cartButton:before {
        content: '{{ $products->count() }}';
    }
</style>
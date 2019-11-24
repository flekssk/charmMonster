<div class="row col-9 productContainer">
    <?php /** @var \App\Models\Product\Liked $product */ ?>
    @forelse($products->items()->all() as $product)
        <div class="col-4 product">
            <div class="productContent">
                <div class="price">
                    {{ number_format(round($product->getFullPrice()), 0, '.', ' ') }} <i class="fa fa-ruble"></i>
                </div>
                <div class="image">
                    <img src="{{ getImagePath($product->image) }}" alt="">
                    <div class="productControl">
                        <div class="buttons">
                            <a class="btn btn-product-control"
                               href="{{ action('Product\ProductController@show', ['product' => $product->product_id]) }}"
                            >
                                Просмотр
                                <i class="icon fa fa-eye"></i>
                            </a>
                            <a class="btn btn-product-control fastLook"
                               data-link="{{ action('Product\ProductController@fastLook', ['product' => $product->product_id]) }}"
                            >
                                Быстрый просмотр
                                <i class="icon fa fa-eye"></i>
                            </a>
                            <a
                                    class="btn btn-product-control fastOrder"
                                    data-product-id="{{ $product->product_id }}"
                            >
                                Быстрый заказ
                                <i class="icon fa fa-shopping-cart"></i>
                            </a>
                            <a class="btn btn-product-control addToCart"
                               data-product-id="{{ $product->product_id }}"
                            >
                                В корзину
                                <i class="icon fa fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="title main">
                    <span>{{ $product->description->name }}</span>
                </div>
            </div>
        </div>
    @empty
        Понравившихс товаров нет
    @endforelse
</div>

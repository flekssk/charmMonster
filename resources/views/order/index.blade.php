<?php
/**
 * @var \App\Extensions\Cart\CartProductsRepository $products
 */
?>
<div class="orderContainer">
    @if(\App\Extensions\Cart\CartFacade::getProducts()->items()->count() > 0)
        <form id="orderForm" action="{{ action('Order\OrderController@store') }}" method="post">
            <div class="mainTitle title ukrainianTitle">
                <h1>Оформление зaказа</h1>
            </div>
            <div class="errorsContainer"></div>
            <div class="products" style="margin: 0 -20px;">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Название</th>
                        <th>Количество</th>
                        <th>Цена</th>
                    </tr>
                    </thead>
                    <?php /** @var \App\Extensions\Cart\CartProduct $product */ ?>
                    @foreach($products->items()->all() as $product)
                        <tr>
                            <td style="vertical-align: middle; text-align: center;" rowspan="2">
                                <input type="checkbox"
                                       class="productSelector"
                                       name="products[{{ $product->getUniqueId() }}]"
                                       style="width: 15px;"
                                       data-product="{{ $product->getUniqueId() }}"
                                       checked
                                >
                            </td>
                            <td rowspan="2">
                                <img src="{{ getImagePath($product->product->image) }}" alt="" style="width: 150px">
                            </td>
                            <td>
                                {{ $product->product->description->name }}
                            </td>
                            <td>
                                <div class="qty small productCounter">
                                <span class="btn clickable minus"
                                      data-counter="product{{ $product->getUniqueId() }}">
                                    -
                                </span>
                                    <input
                                            type="number"
                                            class="count"
                                            name="quantity[{{ $product->getUniqueId() }}]"
                                            value="{{ $product->count }}"
                                            data-product="{{ $product->getUniqueId() }}"
                                            data-counter="product{{ $product->getUniqueId() }}"
                                    >
                                    <span class="btn clickable plus"
                                          data-counter="product{{ $product->getUniqueId() }}">
                                    +
                                    </span>
                                </div>
                            </td>
                            <td>
                                <span style="font-size: 18px;" class="price"
                                      data-product="{{ $product->getUniqueId() }}">
                                    {{ \App\Decorators\PriceDecorator::format($product->totalPrice()) }}
                                </span>
                                <i class="fa fa-ruble"></i>
                            </td>
                        </tr>
                        @forelse($product->complection as $complectionProduct)
                            <tr>
                                <td colspan="1"><img src="{{ getImagePath($product->product->image) }}" alt=""
                                                     style="width: 100px"></td>
                                <td colspan="2">
                                    <b>{{ $product->product->category->category->description->name }}: </b>
                                    {{ $product->product->description->name }}
                                </td>
                                <td></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="2"></td>
                                <td></td>
                            </tr>
                        @endforelse
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <b style="float: right">Итого:</b>
                        </td>
                        <td>
                            <span style="font-size: 18px;" class="totalPrice">
                            {{ \App\Decorators\PriceDecorator::format($products->totalPrice()) }}
                            </span>
                            <i class="fa fa-ruble"></i>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form-group">
                <label for=""><b>Имя</b></label>
                <input type="text" class="form-control" name="first_name"
                       value="{{ \App\Extensions\User\CharmUser::firstName() }}">
            </div>
            <div class="form-group">
                <label for=""><b>Фамилия</b></label>
                <input type="text" class="form-control" name="last_name"
                       value="{{ \App\Extensions\User\CharmUser::lastName() }}">
            </div>
            <div class="form-group">
                <label for=""><b>Телефон</b></label>
                <input type="text" class="form-control" id="phone" name="telephone">
            </div>
            <div class="form-group">
                <label for=""><b>Email</b></label>
                <input type="text" class="form-control" id="email" name="email"
                       value="{{ \App\Extensions\User\CharmUser::email() }}">
            </div>
            <div class="form-group">
                <label for=""><b>Адрес доставки</b></label>
                <input type="text" class="form-control" name="delivery_address" id="delivery_address" value="">
            </div>
            <div class="form-group">
                <label for=""><b>Способ оплаты</b></label>
                <div><input name="payment_method" type="radio" value="1"> Сбербанк онлайн (перевод)</div>
                <div><input name="payment_method" type="radio" value="2"> Yandex касса (банковской картой)</div>
            </div>
            <div class="form-group">
                {!! Recaptcha::render() !!}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Отправить заказ</button>
            </div>
            {{ csrf_field() }}
        </form>
    @else
        <h6 style="text-align: center;">Корзина пуста</h6>
    @endif
</div>
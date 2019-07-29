<div class="orderContainer">
    <form id="orderForm" action="{{ action('Order\OrderController@store') }}" method="post">
        <div class="mainTitle title ukrainianTitle">
            <h1>Оформление зказа</h1>
        </div>
        <div class="errorsContainer"></div>
        <div class="products" style="margin: 0 -20px;">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Название</th>
                    <th>Количество</th>
                </tr>
                </thead>
                @foreach(\App\Extensions\Cart\CartFacade::getProducts()->items()->all() as $product)
                    <tr>
                        <td style="vertical-align: middle; text-align: center;">
                            <input type="checkbox" name="products[{{ $product->product->product_id }}]"
                                   style="width: 15px;">
                        </td>
                        <td>
                            <img src="{{ getImagePath($product->product->image) }}" alt="" style="width: 150px">
                        </td>
                        <td>
                            {{ $product->product->description->name }}
                        </td>
                        <td>
                            <div class="qty small productCounter">
                                <span class="btn clickable minus"
                                      data-counter="product{{ $product->product->product_id }}">
                                    -
                                </span>
                                <input
                                        type="number"
                                        class="count"
                                        name="quantity[{{ $product->product->product_id }}]"
                                        value="{{ $product->count }}"
                                        data-product="{{ $product->product->product_id }}"
                                        data-counter="product{{ $product->product->product_id }}"
                                >
                                <span class="btn clickable plus"
                                      data-counter="product{{ $product->product->product_id }}">
                            +
                        </span>
                            </div>
                        </td>
                    </tr>
                @endforeach
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
            <div><input name="payment_method" type="radio" value="1"> Наличными</div>
            <div><input name="payment_method" type="radio" value="2"> Банковской картов</div>
        </div>
        <div class="form-group">
            {!! Recaptcha::render() !!}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Отправить заказ</button>
        </div>
        {{ csrf_field() }}
    </form>
</div>
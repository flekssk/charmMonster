<div class="orderSuccessContainer">
    <h1 class="mainTitle ukrainianTitle">Заказ {{$order->order_id}}</h1>
    <div style="margin-bottom: 17px;">
        <b>Статус:</b> {{ $order->orderStatus->name }}
    </div>
    <div style="margin-bottom: 20px;">
        <b>Общая стоимость:</b> {{ \App\Decorators\PriceDecorator::format($order->total) }} р.
    </div>
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>Название</th>
            <th>Количество</th>
            <th>Сумма</th>
        </tr>
        </thead>
        @foreach($order->orderProducts as $product)
        <tr>
            <td>
                <img src="{{ getImagePath($product->product->image) }}" alt="" style="width: 50px">
            </td>
            <td>
                {{ $product->product->description->name }}
            </td>
            <td>
                {{ $product->quantity }}
            </td>
            <td>
                {{ number_format((int) $product->total, 0, '.', ' ') }} р.
            </td>
        </tr>
        @endforeach
    </table>
</div>
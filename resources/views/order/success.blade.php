<?php
/**
 * @var \App\Models\Order\Order $order
 */
?>

@extends('layouts.base.layout')

@push('after_scripts')
@endpush

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/mainSlider.css') }}">
@endpush

@section('content')
    <div class="container-fluid contentContainer" style="overflow: hidden;">
        <div class="container">
            <div class="orderSuccessContainer">
                <h1 class="mainTitle ukrainianTitle">Поздравляем</h1>
                <div>
                    Заказ №{{$order->order_id}} успешно создан наш менеджер в скором свяжется с Вами!
                </div>
                <table class="table table-hover">
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
                                <img src="{{ getImagePath($product->product->image) }}" alt="" style="width: 150px">
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
        </div>
    </div>
@endsection

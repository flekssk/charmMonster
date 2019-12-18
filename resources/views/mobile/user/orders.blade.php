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
                @forelse($orders as $order)
                    {!! view('order.singleOrder', ['order' => $order])->render() !!}
                @empty
                    <h1 class="mainTitle ukrainianTitle">Заказы</h1>
                    <h5>У Вас пока нет заказов</h5>
                @endforelse
            </div>
        </div>
    </div>
@endsection

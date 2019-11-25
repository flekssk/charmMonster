<?php
/**
 * @var \App\Models\Product\Product $product
 */
?>

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/product.css') }}">
@endpush


@push('after_scripts')
    <script src="{{ asset('js/blowup.js') }}"></script>
@endpush

@extends('layouts.base.layout')

@section('content')
    {!! view('product.productCard', ['product' => $product])->render() !!}
@endsection

<?php
/**
 * @var \App\Models\Product\Product $product
 */
?>

@push('after_scripts')
    <script src="{{ asset('js/blowup.js') }}"></script>
@endpush

@extends('layouts.base.layout')

@section('content')
    {!! view('product.productCard', ['product' => $product])->render() !!}
@endsection

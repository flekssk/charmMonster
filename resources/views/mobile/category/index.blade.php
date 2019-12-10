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
    <div class="mobileContent" style="overflow: hidden;">
        <div class="categories">
            @foreach($categories->items()->all() as $category)
                <a href="{{ action('Product\CategoryController@products', ['category' => $category->category_id]) }}">
                    <div class="categoryTitle">
                        {{ mb_strtoupper($category->description->name) }}
                    </div>
                    <div class="image">
                        <img src="{{ getImagePath($category->image) }}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

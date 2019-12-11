<?php
/**
 * @var \App\Models\Blog\Article $article
 */
?>

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/main/blog.css') }}">
@endpush
@extends('layouts.base.layout')
@section('content')
    <div class="container-fluid contentContainer">
        <div class="container">
            <div class="articlesContainer">
                {!! view('blog.item', compact('article')) !!}
            </div>
        </div>
    </div>
@endsection

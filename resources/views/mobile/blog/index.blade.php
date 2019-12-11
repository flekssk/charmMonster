<?php
/**
 * @var \App\Repositories\Blog\ArticlesRepository $articles
 */
?>

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/mobile/blog.css') }}">
@endpush
@extends('layouts.base.layout')
@section('content')
    <div class="container-fluid contentContainer">
        <div>
            <div class="articlesContainer">
                @foreach($articles->items()->all() as $article)
                    {!! view('blog.item', compact('article')) !!}
                @endforeach
            </div>
        </div>
    </div>
@endsection

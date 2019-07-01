<?php
/**
 * @var \App\Models\Product\Product $product
 */
?>

@extends('layouts.admin.layout')

@section('header')
@endsection

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.fileupload.css') }}">
@endpush
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

@push('after_scripts')
    <script src="{{ asset('js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('js/jquery.iframe-transport.js') }}"></script>

    <script src="{{ asset('js/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('js/admin/services/files/uploader.js') }}"></script>
    <script src="{{ asset('js/admin/product/form.js') }}"></script>
@endpush

@push('before_styles')
    <link rel="stylesheet" href="{{ asset('css/admin/services/images.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.product.menu')
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Редактирование товара</div>
                </div>
                <div class="box-body">
                    @include('admin.errors')
                    <form
                            action="{{ action('Admin\Product\ProductController@update', ['product' => $product->id]) }}"
                            method="post"
                    >
                        <div class="form-group">
                            <label>Название</label>
                            <?php
                            echo form()->input(
                                'text',
                                'name',
                                old('name', null) ?? $product->name,
                                [
                                    'class'       => 'form-control',
                                    'placeholder' => 'Название'
                                ]
                            )
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Категория</label>
                            {{ bootstrapForm()->select('category_id', $categories->forDropDown('name'), old('category_id') ?? $product) }}
                        </div>
                        <div class="form-group">
                            <label for="category">Цена</label>
                            {{ bootstrapForm()->input('number', 'price', old('category_id') ?? $product->price) }}
                        </div>
                        <div class="form-group checkboxSelector">
                            <label for="category">Активен</label>
                            <div class="form-check">
                                <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="active"
                                        {{ (old('active') ?? $product->active) ? 'checked' : '' }}
                                >
                            </div>
                        </div>
                        <div class="form-group checkboxSelector">
                            <label for="category">Отображать на главной</label>
                            <div class="form-check">
                                <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="on_main"
                                        {{ (old('on_main') ?? $product->on_main) ? 'checked' : '' }}
                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Изображения</label>
                            <div class="uploadControl">
                                <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Выберите файл...</span>
                                <input id="fileupload" type="file" name="files[]" multiple>
                            </span>
                            </div>
                            <div class="alert alert-warning">
                                Первое изображение является главным изображением
                                товара
                            </div>
                            <div id="files" class="row files">
                                <?php
                                echo view(
                                    'admin.services.images.select',
                                    [
                                        'files'    => old('images') ?? $product->imagesToSelector(),
                                        'comments' => old('') ?? $product->imagesCommentsToSelector()
                                    ])->render();
                                ?>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">Сохрнить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
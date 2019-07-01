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
            @include('admin.category.menu')
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Добавить категорию товара</div>
                </div>
                <div class="box-body">
                    @include('admin.errors')
                    <form action="{{ action('Admin\Category\CategoryController@update', ['category' => $category->id]) }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input class="form-control" name="name" placeholder="Название" value="{{ old('name') ?? $category->name }}">
                        </div>
                        <div class="form-group checkboxSelector">
                            <label for="category">Активен</label>
                            <div class="form-check">
                                <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="active"
                                        {{ (old('active') ?? $category->active) ? 'checked' : '' }}
                                >
                            </div>
                            <div>
                                <small class="form-text text-muted">Будет ли категория отобрааться</small>
                            </div>
                        </div>
                        <div class="form-group checkboxSelector">
                            <label for="category">Отображать на главной</label>
                            <div class="form-check">
                                <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="on_main"
                                        {{ (old('on_main') ?? $category->on_main) ? 'checked' : '' }}
                                >
                            </div>
                            <div>
                                <small class="form-text text-muted">Будет ли категория отобрааться на главной страннице</small>
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
                                        'files'    => old('images') ?? $category->imagesToSelector(),
                                        'comments' => old('') ?? $category->imagesCommentsToSelector()
                                    ])->render();
                                ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
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
                    <form action="{{ action('Admin\Category\CategoryController@store') }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input class="form-control" name="name" placeholder="Название">
                        </div>
                        <div class="form-group checkboxSelector">
                            <label for="category">Отображать на главной</label>
                            <div class="form-check">
                                <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="on_main"
                                        {{ old('on_main') ? 'checked' : '' }}
                                >
                            </div>
                        </div>
                        <div class="form-group checkboxSelector">
                            <label for="category">Активен</label>
                            <div class="form-check">
                                <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="active"
                                        {{ old('active') ? 'checked' : '' }}
                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="uploadControl">
                                <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Выберите файл...</span>
                                <input id="fileupload" type="file" name="files[]" multiple>
                            </span>
                            </div>
                            <div id="files" class="row files">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
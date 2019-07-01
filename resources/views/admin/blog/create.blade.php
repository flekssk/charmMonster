@extends('layouts.admin.layout')

@section('header')
@endsection

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.fileupload.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/services/images.css') }}">
@endpush

@push('after_scripts')
    <script src="{{ asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            tinymce.init({selector: 'textarea', language:"ru"})
        });
    </script>

    <script src="{{ asset('js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('js/jquery.iframe-transport.js') }}"></script>

    <script src="{{ asset('js/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('js/admin/services/files/uploader.js') }}"></script>
    <script src="{{ asset('js/admin/blog/form.js') }}"></script>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.blog.menu')
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Добавить пост</div>
                </div>
                <div class="box-body">
                    @include('admin.errors')
                    <form action="{{ action('Admin\Blog\PostController@store') }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Заголовок</label>
                            <input class="form-control" name="title" placeholder="Заголовок"
                                   value="{{ old('title', '') }}">
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Краткое содержание</label>
                            <textarea class="form-control" name="short_content"
                                      placeholder="Заголовок">{{ old('short_content', '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Содержание</label>
                            <textarea class="form-control" name="content"
                                      placeholder="Заголовок">{{ old('content', '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Изображения</label>
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
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
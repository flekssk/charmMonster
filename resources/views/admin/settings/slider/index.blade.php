<?php
/**
 * @var \App\Requests\Admin\Category\CategoriesRepository $categories
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
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">Слайдер на главной странице</div>
                </div>
                <div class="box-body">
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
                            Порядок изображений соответствует порядку отображения в слайдере
                        </div>
                        <form action="{{ action('Admin\Settings\MainSliderController@store') }}" method="post">
                            <div id="files" class="row files">
                                <?php
                                echo view(
                                    'admin.services.images.select',
                                    [
                                        'files'    => old('images') ?? $images->imagesToSelector(),
                                        'comments' => old('images') ?? $images->imagesCommentsToSelector()
                                    ])->render();
                                ?>
                            </div>
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">Сохрнить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
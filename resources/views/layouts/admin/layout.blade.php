@extends('backpack::layout')

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">
@endpush

@push('before_scripts')
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
@endpush

@push('before_styles')
    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
    >
@endpush


<?php
$version = '1.15';
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/mobile/main.css?v=' . $version) }}">
<link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/mobile/order.css?v=' . $version) }}">
<link rel="stylesheet" href="{{ asset('lightbox/css/lightgallery.css?v=' . $version) }}">
<link rel="stylesheet" href="{{ asset('slick/slick.css?v=' . $version) }}">
<link rel="stylesheet" href="{{ asset('slick/slick-theme.css?v=' . $version) }}">
<link rel="stylesheet" href="{{ asset('css/mobile/products.css?v=' . $version) }}">
<link rel="stylesheet" href="{{ asset('css/mobile/product.css?v=' . $version) }}">
<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@19.7.1/dist/css/suggestions.min.css" rel="stylesheet" />

@stack('after_styles')
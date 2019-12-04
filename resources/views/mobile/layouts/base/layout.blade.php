<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.base.head')
</head>
<body>
<div style="overflow: hidden" class="wrapper">
    @include('layouts.base.header')
    @yield('header')
    <div class="mainPageContent">
        @yield('content')
        @include('layouts.base.footer')
    </div>
</div>
@include('layouts.base.foot')
<div class="popupWindow">
    <div class="bluer"></div>
    <div class="popupContent">
        <div class="closer">
            <span class="fa fa-close closePopup"></span>
        </div>
        <div class="contentContainer"></div>
    </div>
</div>
</body>
</html>

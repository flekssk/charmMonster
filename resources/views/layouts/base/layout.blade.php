<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.base.head')
</head>
<body>
<div style="overflow: hidden" class="wrapper">
    @include('layouts.base.header')
    @yield('header')
    @yield('content')
    <footer class="main-footer text-sm clearfix">
        @include('layouts.base.footer')
    </footer>
</div>
@include('layouts.base.foot')
<div class="popupWindow">
    <div class="popupContent">
        <div class="closer">
            <span class="fa fa-close closePopup"></span>
        </div>
        <div class="contentContainer"></div>
    </div>
</div>
</body>
</html>

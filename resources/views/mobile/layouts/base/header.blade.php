<div class="headerContainer">
    <div class="menuBackground">
    </div>
    <div class="row headerControlPanel justify-content-between">
        <div class=" col-5 control cartControlBlock">
                    <span class="controlButton cartButton">
                        <i class="fa fa-shopping-cart"></i>
                    </span>
            <span class="col-5 controlButton cartButton">
                        <i class="fa fa-heart"></i>
                    </span>
        </div>
        <div class=" col-5 control cartControlBlock">
                <span class="col-5 controlButton cartButton" style="float: right;">
                        <i class="fa fa-heart"></i>
                    </span>
        </div>
    </div>
    <div class="row">
        <div class="logo">
            <img src="{{ asset('images/layout/logo.png') }}" alt="">
        </div>
    </div>
</div>
<div class="headerLine"></div>

<div class="topMenuContainer">
    <div class="container menuBackground">
        <div class="menuContent">
            <div class="col-9 menu">
                <div class="item">
                    <a class="mainItem" href="{{ action('IndexController@index') }}">ГЛАВНАЯ</a>
                </div>
                <div class="item">
                    <a class="mainItem" href="{{ action('Product\ProductController@index') }}">КАТАЛОГ</a>
                </div>
                <div class="item">
                    <a class="mainItem" href="{{ action('Blog\BlogController@index') }}">БЛОГ</a>
                </div>
                <div class="item">
                    <a class="mainItem">КОНТАКТЫ</a>
                </div>
            </div>
        </div>
    </div>
</div>
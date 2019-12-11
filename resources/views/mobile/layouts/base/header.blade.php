<div class="headerContainer">
    <div class="menuBackground">
    </div>
    <div class="row headerControlPanel justify-content-between">
        <div class="control cartControlBlock">
                    <span class="controlButton cartButton mobileCartButton">
                        <i class="fa fa-shopping-cart"></i>
                    </span>
            <span class="controlButton user">
                        <i class="fa fa-user user"></i>
                    </span>
        </div>
        <div class="control cartControlBlock">
            <span class="menuButton">
                <i class="fa fa-bars"></i>
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
                    <a class="mainItem" href="{{ action('Product\CategoryController@index') }}">КАТАЛОГ</a>
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
<style>
    .headerContainer .headerControlPanel .control.cartControlBlock .cartButton:before {
        content: '{{ \App\Extensions\Cart\CartFacade::getProducts()->count() }}';
    }
</style>
<div class="headerContainer">
    <div class="container">
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
            <div class="col-6 logo">
                <img src="{{ asset('images/layout/logo.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container headerMainContainer">
    <div class="row">
        <div class="col-9 image" style="">
            <style>
                .headerMainContainer:after {
                    background-image: url(/public/uploads/images/catalog/555.jpg);
                    background-position: 77px -164px;
                }
            </style>
        </div>
    </div>
</div>
<div class="row topMenuContainer">
    <div class="menuContent container">
        <div class="col-9 menu">
            <div class="col-2 item">
                <a class="mainItem" href="{{ action('IndexController@index') }}">ГЛАВНАЯ</a>
            </div>
            <div class="col-2 item">
                <a class="mainItem" href="{{ action('Product\ProductController@index') }}">КАТАЛОГ</a>
                <div class="submenu">
                    @foreach(\App\Repositories\Category\CategoriesRepository::getOnMain()->items() as $category)
                        <div class="submenuItem">
                            <a href="{{ action('Product\CategoryController@products', ['category' => $category->category_id]) }}">{{ $category->description->name ?? '' }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-2 item">
                <a class="mainItem" href="{{ action('Blog\BlogController@index') }}">БЛОГ</a>
            </div>
            <div class="col-2 item">
                <a class="mainItem">КОНТАКТЫ</a>
            </div>
        </div>
    </div>
</div>
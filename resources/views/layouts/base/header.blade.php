<div class="headerContainer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 headerContacts">
                <a class="contactButton emailButton" href="">
                    <i class="fa fa-envelope-o"></i>
                </a>
                <a class="contactButton vkButton" href="">
                    <i class="fa fa-vk"></i>
                </a>
                <a class="contactButton instagramButton" href="">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="contactButton phoneButton" href="">
                    <i class="fa fa-phone"></i>
                </a>
                <span class="phoneNumber">
            8 960 353 31 59
        </span>
            </div>
            <div class="col-3 align-self-end headerControlPanel">
                <div class="control">
                    <span class="userName">Алексей Осипов</span>
                </div>
                <div class="control">
                    <span class="controlButton"><i class="fa fa-user"></i></span>
                </div>
                <div class="control cartControlBlock">
                    <span class="controlButton cartButton">
                        <i class="fa fa-shopping-cart"></i>
                    </span>
                    <div class="cartWidget">
                        <div class="content">
                            <?php echo app('cart')->renderWidget()->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container headerMainContainer">
    <div class="row">
        <div class="col-3 logo">
            <img src="{{ asset('images/layout/logo.png') }}" alt="">
        </div>
        <div class="col-9 image" style="">
            <style>
                .headerMainContainer:after {
                    background-image: url({{ asset('images/layout/test.jpg') }});
                    background-position: 0 -400px;
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
                <a class="mainItem">БЛОГ</a>
            </div>
            <div class="col-2 item">
                <a class="mainItem">КОНТАКТЫ</a>
            </div>
        </div>
    </div>
</div>
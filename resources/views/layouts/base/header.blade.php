<div class="headerContainer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 headerContacts">
                <a class="contactButton emailButton" href="mailto:{{ translation('mailAddress') }}">
                    <i class="fa fa-envelope-o"></i>
                </a>
                <a class="contactButton vkButton" href="{{ translation('vkLink', '') }}">
                    <i class="fa fa-vk"></i>
                </a>
                <a class="contactButton instagramButton" href="{{ translation('instagramLink', '') }}">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="contactButton phoneButton" href="">
                    <i class="fa fa-phone"></i>
                </a>
                <span class="phoneNumber">
                    {{ translation('phoneNumber', '') }}
                </span>
            </div>
            <div class="col-5 align-self-end headerControlPanel">
                <div style="float: right">
                    <div class="control">
                        <span class="userName">{{ \App\Extensions\User\CharmUser::name() }}</span>
                    </div>
                    <div class="control">
                    <span
                            class="controlButton user"
                            data-toggle="tooltip"
                            data-title="Пользователь"
                    >
                        <i class="fa fa-user"></i>
                    </span>
                    </div>
                    @if(!\App\Extensions\User\CharmUser::isGuest())
                        <div class="control">
                            <span
                                    class="controlButton liked"
                                    data-toggle="tooltip"
                                    data-title="Понравившиеся товары"
                            >
                                <i class="fa fa-heart"></i>
                            </span>
                        </div>
                    @endif
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
</div>

<div class="container headerMainContainer">
    <div class="row">
        <div class="col-3 logo">
            <img src="{{ asset('images/layout/logo.png') }}" alt="">
        </div>
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
                <a class="mainItem">КАТАЛОГ</a>
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
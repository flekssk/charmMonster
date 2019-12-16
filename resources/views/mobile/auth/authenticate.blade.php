<div class="authenticationContainer">
    <div class="mainTitle title ukrainianTitle">
        <h1>Авторизация</h1>
    </div>
    <div style="text-align: center; margin-bottom: 10px;">
        <span>{{ $text }}</span>
    </div>
    <div class="buttonsContainer">
        @if(!App\Extensions\User\CharmUser::has())
            <a href="{{ action('User\VKAuthController@redirectToProvider') }}"
               class="btn btn-vk authButton"
            >
                <i class="fa fa-vk"></i> ВКонтакте
            </a>
            <a href="{{ action('User\InstagramAuthController@redirectToProvider') }}"
               class="btn btn-instagram authButton"
            >
                <i class="fa fa-instagram"></i> Instagram
            </a>
            <a href="{{ action('User\OKAuthController@redirectToProvider') }}"
               class="btn btn-odnoklassinki authButton"
            >
                <i class="fa fa-odnoklassniki"></i> Одноклассиники
            </a>
        @else
            Вы вошли как: {{ \App\Extensions\User\CharmUser::name() }}
            <a href="{{ action('User\UserController@logout') }}"
               class="btn btn-logout authButton"
            >
                Выйти
            </a>
        @endif
    </div>
</div>
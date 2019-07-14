<div class="authenticationContainer">
    <div class="mainTitle title ukrainianTitle">
        <h1>Авторизация</h1>
    </div>
    <div class="buttonsContainer">
        @if(!App\Extensions\User\CharmUser::has())
            <a href="{{ action('User\VKAuthController@redirectToProvider') }}"
               class="btn btn-vk authButton"
            >
                <i class="fa fa-vk"></i> ВКонтакте
            </a>
            <a href="{{ action('User\VKAuthController@redirectToProvider') }}"
               class="btn btn-instagram authButton"
            >
                <i class="fa fa-instagram"></i> Instagram
            </a>
        @else
            <a href="{{ action('User\UserController@logout') }}"
               class="btn btn-logout authButton"
            >
                Выйти
            </a>
        @endif
    </div>
</div>
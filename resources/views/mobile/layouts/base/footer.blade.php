<footer class="clearfix">
    <div class="footerContainer">
        <div class="socialButtons">
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
            <span class="text">
                {{ translation('phoneNumber', '') }}
            </span>
        </div>
    </div>
    <div class="ajaxDebug"></div>
    <div class="jsonData" style="display: none;">
        {{
        json_encode(
            [
                'createOrderUrl' => action('Order\OrderController@index'),
                'authenticateUrl' => action('User\UserController@authenticate')
            ]
        )
        }}
    </div>
</footer>
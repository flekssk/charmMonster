<footer class="clearfix">
    <div class="footerContainer">
        <div class="socialButtons">
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
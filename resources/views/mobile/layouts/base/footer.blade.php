<footer class="main-footer text-sm clearfix">
    <div class="container-fluid footerFluid">
        <div class="container footerContainer" style="text-align: center;">
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
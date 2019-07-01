let cartControl = function () {
    let caller = this;

    this.initialize = function () {
        $(document).ready(function () {
            caller.changeWidgetCount($('.cartWidgetContainer').data('product-count'));

            $('.removeFromCart').unbind();
            $('.removeFromCart').click(caller.removeFromCart);

            $('.addToCart').unbind();
            $('.addToCart').click(caller.addToCart);
        });
    };

    this.removeFromCart = function (event) {
        let button = $(event.currentTarget);

        $(this).parent().parent().remove();
        $.ajax({
                url: '/cart/removeFromCart',
                method: 'delete',
                dataType: 'json',
                data: {
                    'product_id': button.data('product-id')
                },
                success: function (response) {
                    $('.cartWidget .content').html(response.widgetContent);
                    caller.initialize();
                }
            }
        );
    };

    this.addToCart = function (event) {
        let button = $(event.currentTarget);

        $.ajax({
                url: '/cart/addToCart',
                method: 'post',
                dataType: 'json',
                data: {
                    'product_id': button.data('product-id')
                },
                success: function (response) {
                    $('.cartWidget .content').html(response.widgetContent);
                    caller.initialize();
                }
            }
        );
    };
    this.changeWidgetCount = function (count) {
        console.log($('.cartButton:before').css('padding'));
    }
};

let cart = new cartControl();

cart.initialize();

$(document).ready(function () {
    $('.categoryBox').click(function () {
        location.href = $(this).data('link');
    });

    $('.topMenuContainer .menu .item').on('mouseover', function () {
        $(this).find('.submenu').show();
        $(this).addClass('active');
    });
    $('.topMenuContainer .menu .item').on('mouseout', function () {
        $(this).find('.submenu').hide();
        $(this).removeClass('active');
    });

    $('.cartControlBlock').mouseover(function () {
        $('.cartWidget').show();
    });

    $('.cartControlBlock').mouseout(function () {
        $('.cartWidget').hide();
    });
});
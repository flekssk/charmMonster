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
                    $.notify({
                        message: 'Товар добавлен в корзину',
                        target: '_blank'
                    },{
                        type: 'info',
                        timer: 1000,
                        delay: 1000,
                        placement: {
                            align: "center"
                        },
                    });

                    $('.cartWidget .content').html(response.widgetContent);
                    caller.initialize();
                }
            }
        );
    };
    this.changeWidgetCount = function (count) {
        $('.cartButton:before').css('padding')
    }
};

let cart = new cartControl();

let popup = function () {
    let caller = this;

    this.initialize = function () {
        $(document).ready(function () {
            $('.closePopup').click(caller.hidePopup);
        });
    };

    this.showPopup = function () {
        $('.popupWindow').fadeIn();
    };

    this.showContent = function (content) {
        caller.showPopup();
        $('.popupContent .contentContainer').html(content);
    };

    this.hidePopup = function () {
        $('.popupWindow').fadeOut();
    };

    this.initialize();
};

cart.initialize();

$(document).ready(function () {
    $.popupControl = new popup();

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

    $('.count').prop('disabled', true);
    $(document).on('click', '.plus', function () {
        $('.count').val(parseInt($('.count').val()) + 1);
    });
    $(document).on('click', '.minus', function () {
        $('.count').val(parseInt($('.count').val()) - 1);
        if ($('.count').val() == 0) {
            $('.count').val(1);
        }
    });

    $('.fastLook').click(function () {
        $.ajax({
           url: $(this).data('link'),
           dataType: 'json',
           success: function (response) {
               $.popupControl.showContent(response.content);
               $(document).ready(function () {
                   var productControl = new product().initialize();
               });
           }
        });
    });
});
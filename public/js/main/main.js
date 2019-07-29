let controller = {};

let cartControl = function () {
    let caller = this;

    this.initialize = function () {
        $(document).ready(function () {
            $("#delivery_address").suggestions({
                token: "04ce039c4780b0b29f0f77c8a80590ee1a3b2b5c",
                type: "ADDRESS",
                onSelect: function (suggestion) {
                }
            });

            $("#email").suggestions({
                token: "04ce039c4780b0b29f0f77c8a80590ee1a3b2b5c",
                type: "EMAIL",
                /* Вызывается, когда пользователь выбирает одну из подсказок */
                onSelect: function (suggestion) {
                    console.log(suggestion);
                }
            });

            $("#phone").mask("+7(999) 999-9999");

            caller.changeWidgetCount($('.cartWidgetContainer').data('product-count'));

            $('.makeOrder').unbind();
            $('.makeOrder').click(caller.makeOrder);

            $('.placeOrder').unbind();
            $('.placeOrder').click(caller.placeOrder);

            $('.removeFromCart').unbind();
            $('.removeFromCart').click(caller.removeFromCart);

            $('.addToCart').unbind();
            $('.addToCart').click(caller.addToCart);

            $('.productCounter .clickable').unbind();
            $('.productCounter .clickable').click(caller.changeProductCount);

            $('#orderForm').ajaxForm(
                {
                    beforeSubmit: function () {
                        controller.form.clearErrors();
                    },
                    success: function (resounce) {
                        location.href = '/order/success/' + resounce.order_id
                    },
                    error: function (response) {
                        controller.form.renderErrors(response.responseJSON.errors);
                        $('.popupWindow').animate({
                            scrollTop: 0
                        }, 400);
                    }
                }
            );
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
                    $('.totalPrice').html(response.totalPrice);
                    $('.cartWidget .content').html(response.widgetContent);
                    $('.cartProductContainer').filter('[data-product="' + button.data('product-id') + '"]').remove();
                    caller.initialize();
                    $.notify({
                        message: 'Товар удален из корзины',
                        target: '_blank'
                    }, {
                        type: 'info',
                        timer: 1000,
                        delay: 1000,
                        placement: {
                            align: "center"
                        },
                    });

                }
            }
        );
    };

    this.changeProductCount = function (event) {
        let counter = $(event.currentTarget).parent().find('.count'),
            productId = counter.data('product');
        $(document).ready(function () {
            $.ajax({
                    url: '/cart/changeCount',
                    method: 'post',
                    dataType: 'json',
                    data: {
                        'product_id': productId,
                        'count': counter.val()
                    },
                    success: function (response) {
                        $('.price').filter('[data-product="' + productId + '"]').html(response.productTotalPrice + ' р.');
                        $('.totalPrice').html(response.totalPrice);

                        caller.initialize();
                    }
                }
            );
        });
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
                    $('.totalPrice').html(response.totalPrice);
                    $.notify({
                        message: 'Товар добавлен в корзину',
                        target: '_blank'
                    }, {
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
    };

    this.makeOrder = function () {
        $.ajax(
            {
                url: controller.data.createOrderUrl,
                dataType: 'json',
                success: function (response) {
                    controller.popupControl.showContent(response.content);
                    caller.initialize();
                },
            }
        );
    };
};

controller.cart = new cartControl();

let popup = function () {
    let caller = this;

    this.initialize = function () {
        $(document).ready(function () {
            $('.closePopup').click(caller.hidePopup);
        });
    };

    this.showPopup = function () {
        $('.popupWindow').fadeIn();
        $('body').css('overflow', 'hidden');
    };

    this.showContent = function (content) {
        caller.showPopup();
        $('.popupContent .contentContainer').html(content);
    };

    this.hidePopup = function () {
        $('body').css('overflow', 'auto');
        $('.popupWindow').fadeOut();
    };

    this.initialize();
};

controller.cart.initialize();

$(document).ready(function () {
    controller.popupControl = new popup();
    controller.data = JSON.parse($('.jsonData').html());

    $('.authenticate').click(function () {
        $.ajax({
                url: controller.data.authenticateUrl,
                method: 'get',
                dataType: 'json',
                success: function (response) {
                    controller.popupControl.showContent(response.content);
                }
            }
        );

    });

    $('.categoryBox').click(function () {
        location.href = $(this).data('link');
    });

    // $('.blogPostsContainer .post').click(function () {
    //     location.href = $(this).data('link');
    // });

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
        let counter = $('.count[data-counter="' + $(this).data('counter') + '"]');

        counter.val(parseInt(counter.val()) + 1);
    });
    $(document).on('click', '.minus', function () {
        let counter = $('.count[data-counter="' + $(this).data('counter') + '"]');
        counter.val(parseInt($('.count').val()) - 1);
        if (counter.val() == 0) {
            counter.val(1);
        }
    });

    $('.fastLook').click(function () {
        $.ajax({
            url: $(this).data('link'),
            dataType: 'json',
            success: function (response) {
                controller.popupControl.showContent(response.content);
                $(document).ready(function () {
                    var productControl = new product().initialize();
                });
            }
        });
    });
});

controller.form = new function () {
    this.renderErrors = function (errors) {
        let renderedErrors = [];

        $.each(errors, function (fieldName, fieldError) {
            $('[name="' + fieldName + '"]').addClass('alert-danger');
            $.each(fieldError, function (id, error) {
                renderedErrors.push($('<div class="alert alert-danger" />').html(error));
            })
        });

        $('.errorsContainer').html(renderedErrors);
    };

    this.clearErrors = function () {
        $('input,textarea').removeClass('alert-danger');
        $('.errorsContainer').html('');
    }
};
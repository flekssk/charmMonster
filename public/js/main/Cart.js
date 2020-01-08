class Cart extends Service {
    constructor(options = {}) {
        super(options);

        this.rebindEvents();
    }

    rebindEvents() {
        let caller = this;

        $(document).ready(function () {
            $('.productSelector').click(function () {
                caller.repriceOrderTotal();
            });

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
            $('.makeOrder').click(function () {
                caller.makeOrder($(this).data('products'));
            });

            $('.placeOrder').unbind();
            $('.placeOrder').click(caller.placeOrder);

            $('.removeFromCart').unbind();
            $('.removeFromCart').click(function (event) {
                caller.removeFromCart(event);
            });

            $('.addToCart').unbind();
            $('.addToCart').click(function () {
                caller.addToCart(
                    $(this).data('product-id'),
                    product().getSelectedComplection()
                );
            });

            $('.fastOrder').unbind();
            $('.fastOrder').click(function () {
                caller.fastOrder($(this).data('product-id'));
            });


            $('.productCounter .clickable').unbind();
            $('.productCounter .clickable').click(function (event) {
                caller.changeProductCount(event);
            });

            $('#orderForm').ajaxForm(
                {
                    beforeSubmit: function () {
                        form().clearErrors();
                    },
                    method: 'get',
                    success: function (response) {
                        location.href = response.redirectUrl;
                    },
                    error: function (response) {
                        form().renderErrors(response.responseJSON.errors);
                        $('.popupWindow').animate({
                            scrollTop: 0
                        }, 400);
                    }
                }
            );
        });
    }

    repriceOrderTotal() {
        let selected = $('.productSelector').filter(':checked'),
            products = [];

        $.each(selected, function (id, item) {
            products.push($(item).data('product'));
        });

        $.ajax(
            {
                url: '/cart/getProductsPrice',
                data: {
                    products: products
                },
                dataType: 'json',
                success: function (response) {
                    $('.totalPrice').html(response.formatPrice);
                }
            }
        )
    }

    removeFromCart(event) {
        let button = $(event.currentTarget),
            caller = this;

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
                    caller.makeOrder($('.makeOrder').data('products'));
                    caller.rebindEvents();
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
    }

    changeProductCount(event) {
        let counter = $(event.currentTarget).parent().find('.count'),
            productId = counter.data('product'),
            caller = this;

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
                        $('.price').filter('[data-product="' + productId + '"]').html(response.productTotalPrice);
                        $('.totalPrice').html(response.totalPrice);

                        caller.rebindEvents();
                    }
                }
            );
        });
    }

    addToCart(productId, complection = []) {
        let caller = this,
            result = false;

        $.ajax({
                url: '/cart/addToCart',
                method: 'post',
                dataType: 'json',
                data: {
                    product_id: productId,
                    complection: complection,
                },
                async: false,
                success: function (response) {
                    console.log(response);
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

                    $('.mobileCartButton:before').html(response.productsCount);

                    $('.cartWidget .content').html(response.widgetContent);

                    caller.rebindEvents();

                    result = response.id;
                }
            }
        );

        return result;
    };

    changeWidgetCount(count) {
        $('.cartButton:before').css('padding')
    }

    makeOrder(products) {
        let caller = this;

        $.ajax(
            {
                url: app().getData('createOrderUrl'),
                dataType: 'json',
                data: {
                    products: products
                },

                success: function (response) {
                    popup().showContent(response.content);
                    caller.rebindEvents();
                },
            }
        );
    }

    fastOrder(productId) {
        let cartProductId = this.addToCart(productId);

        if(Number.isInteger(productId)) {
            this.makeOrder([cartProductId]);
        }
    }
}

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

            $('.cartButton').click(
                function () {
                    caller.makeOrder($(this).data('products'));
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
                    $('.cartControlBlock').html(response.widgetContent);
                    caller.makeOrder($('.mobileCartButton').data('products'));
                    caller.rebindEvents();
                    $.notify({
                        message: 'Товар удален из корзины',
                        target: '_blank'
                    }, {
                        type: 'info',
                        timer: 500,
                        delay: 500,
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

                    $('.cartControlBlock').html(response.widgetContent);

                    $('.mobileCartButton').attr('data-products', response.products);

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
                method: 'get',
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

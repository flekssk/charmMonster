class Liked extends Service {
    /**
     *
     * @param options {{
     *     addLink: string,
     *     showLink: string
     * }}
     */
    constructor(options = {}) {
        super(options);

        this.addLink = options.addLink;
        this.showLink = options.showLink;

        this.rebindEvents();
    }

    show() {
        if (!user().hasUser()) {
            user().authenticate('Для того чтобы добавить товар в "Понравилось", авторизуйтесь.');
            return false;
        }

        $.ajax(
            {
                url: this.showLink,
                dataType: 'json',
                success: function (response) {
                    popup().showContent(response.content);
                    $(document).ready(function () {
                        products().rebindEvents();
                    });
                }
            }
        )
    }

    add(productId) {
        if (!user().hasUser()) {
            user().authenticate('Для того чтобы добавить товар в "Понравилось", авторизуйтесь.');
            return false;
        }

        $.ajax({
                url: this.addLink,
                data: {
                    productId: productId
                },
                // dataType: 'json',
                method: 'post',
                success: function (response) {
                    if (response.success === true) {
                        $.notify({
                            message: 'Товар добавлен в понравившиеся',
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
            }
        )
    }

    rebindEvents() {
        let caller = this;

        $('.addToLiked').click(function () {
            caller.add($(this).data('product-id'));
        });

        $('.liked').click(function () {
           caller.show();
        });
    }
}
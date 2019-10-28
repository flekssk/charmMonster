class ProductComplectationForm {
    constructor(options) {
        let object = this;
        this.reloadUrl = options.reloadUrl;
        this.csrfToken = options.csrfToken;
        this.productId = options.productId;
        this.storeComplectionCategoryUrl = options.storeComplectionCategoryUrl;
        this.storeComplectionSelectedProductUrl = options.storeComplectionSelectedProductUrl;

        $(document).ready(function () {
            object.bindEvents();
        });
    }

    bindEvents() {
        let object = this;

        $('#addProductComplectation').click(function (event) {
            event.stopPropagation();
            event.preventDefault();

            object.storeComplectation(
                $(this).data('add-link'),
                $('#complectationNameInput').val()
            );
        });

        $('.storeComplectionCategory').click(function (event) {
            event.stopPropagation();
            event.preventDefault();

            let complectionId = $(this).data('complection-id');
            let select = $('.complectationCategorySelect').filter('[data-complection-id="' + complectionId + '"]');

            object.storeComplectionCategory(complectionId, select.find(':selected').val());
        });

        $('.complectationProduct').click(function () {
            $('.complectationProduct').removeClass('selected');
            $(this).addClass('selected');

            object.storeSelectedProduct(
                $(this).data('complection-id'),
                $(this).data('category-id'),
                $(this).data('product-id')
            );
        });

        $('.destroyComplection').click(function (event) {
            event.stopPropagation();
            event.preventDefault();

            object.destroyComplection($(this).data('destroy-url'));
        })
    }

    storeSelectedProduct(complectionId, categoryId, productId) {
        let object = this;
        $.ajax(
            {
                url: this.storeComplectionSelectedProductUrl,
                data: {
                    complectionId: complectionId,
                    categoryId: categoryId,
                    productId: productId
                },
                method: 'post',
            }
        )
    }

    storeComplectation(storeLink, name) {
        let object = this;

        $.ajax({
            url: storeLink,
            data: {
                product_id: this.productId,
                name: name,
                _token: this.csrfToken
            },
            method: 'POST',
            success: function () {
                object.reloadTab();
            }
        })
    }

    reloadTab() {
        $.ajax(
            {
                url: this.reloadUrl,
                success: function (response) {
                    $('#productComplectationContainer').html(response);
                }
            }
        )
    }

    storeComplectionCategory(complectionId, categoryId) {
        let object = this;
        console.log(categoryId);
        $.ajax(
            {
                url: this.storeComplectionCategoryUrl,
                method: 'post',
                data: {
                    complectionId: complectionId,
                    categoryId: categoryId
                },
                success: function () {
                    object.reloadTab();
                }
            }
        )
    }

    destroyComplection(url) {
        let object = this;

        $.ajax(
            {
                url: url,
                method: 'delete',
                success: function () {
                    object.reloadTab();
                }
            }
        );
    }
}

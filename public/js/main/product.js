class Product extends Service {
    constructor(options = {}) {
        super(options);

        let object = this;

        $('.imagesList .image').click(function () {
            $(".mainImage").trigger('zoom.destroy');
            let clickedImage = $(this).find('img').attr('src');
            $('.mainImage').find('img').attr('src', clickedImage);
        });

        $('.complectationProduct').click(function () {
            $('.complectationProduct')
                .filter('[data-category-id="' + $(this).data('category-id') + '"]')
                .removeClass('selected');

            $('.selectedProductName')
                .filter('[data-category-id="' + $(this).data('category-id') + '"]')
                .find('.name')
                .html($(this).data('original-title'));

            $(this).addClass('selected');

            object.repriceComplection();
            object.changeProductComplection($(this).data('main-product'));
        });

        $('.complectionCategorySelect').change(function () {
            let selectedCategory = $('.complectionCategorySelect').find('option:selected').val(),
                productId = $(this).data('product-id');

            $('.complectionCategoryProducts').removeClass('selected');
            $('.complectionCategoryProducts').filter('[data-category-id="' + selectedCategory + '"]').addClass('selected');

            $(document).ready(function () {
                object.repriceComplection();
                object.changeProductComplection(productId);
            });
        });

        $('[data-toggle="tooltip"]').tooltip();
    }

    getSelectedComplection() {
        let products = {};

        $.each($('.complectionCategoryProducts.selected'), function (index, category) {
            products[index] = ($(category).find('.complectationProduct.selected'));
        });

        return products;
    }

    repriceComplection() {
        let baseProductPrice = Number.parseInt($('.mainProductPrice').data('base-price')),
            totalPrice = 0;

        $.each(this.getSelectedComplection(), function (index, product) {
            totalPrice += Number.parseInt($(product).data('price'));
        });

        totalPrice += baseProductPrice;

        $('.mainProductPrice').html(totalPrice);
    }

    changeProductComplection(productId) {
        let complection = [];

        $.each(this.getSelectedComplection(), function (index, product) {
            complection.push($(product).data('product-id'));
        });


        $('.addToCart').filter('[data-product-id="' + productId + '"]').attr('data-complection', JSON.stringify(complection));
    }

    getSelectedComplectionProductsId() {
        let complection = [];

        $.each(this.getSelectedComplection(), function (index, product) {
            complection.push($(product).data('product-id'));
        });

        return complection;
    }
}
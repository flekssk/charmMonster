class ProductController {
    constructor(options = {}) {

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

let productController = new ProductController();

controller.productController = productController;

var product = function () {
    let caller;

    this.initialize = function () {
        $(".mainImage").zoom();
        $('.imagesList .image').click(function () {
            $(".mainImage").trigger('zoom.destroy');
            let clickedImage = $(this).find('img').attr('src');
            $('.mainImage').find('img').attr('src', clickedImage);
            $(document).ready(function () {
                $(".mainImage").zoom();
            });
        });

        $('.complectationProduct').click(function () {
            $('.complectationProduct')
                .filter('[data-category-id="' + $(this).data('category-id') + '"]')
                .removeClass('selected');

            $(this).addClass('selected');

            productController.repriceComplection();
            productController.changeProductComplection($(this).data('main-product'));

        });

        $('.complectionCategorySelect').change(function () {
            let selectedCategory = $('.complectionCategorySelect').find('option:selected').val(),
                productId = $(this).data('product-id');

            $('.complectionCategoryProducts').removeClass('selected');
            $('.complectionCategoryProducts').filter('[data-category-id="' + selectedCategory + '"]').addClass('selected');

            $(document).ready(function () {
                productController.repriceComplection();
                productController.changeProductComplection(productId);
            });
        });
    };

    this.selectComplectionProduct = function () {

    };
};

$(document).ready(function () {
    let productControl = new product();

    productControl.initialize();
});
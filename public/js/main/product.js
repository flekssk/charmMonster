var product = function () {
    let caller;

    this.initialize = function () {
        controller.cart.initialize();
        $(".mainImage").zoom();
        $('.imagesList .image').click(function () {
            $(".mainImage").trigger('zoom.destroy');
            let clickedImage = $(this).find('img').attr('src');
            $('.mainImage').find('img').attr('src', clickedImage);
            $(document).ready(function () {
                $(".mainImage").zoom();
            });
        });
    };
};

$(document).ready(function () {
    var productControl = new product();

    productControl.initialize();
});
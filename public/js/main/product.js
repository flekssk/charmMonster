var product = function () {
    let caller;

    this.initialize = function () {
        $('.imagesList .image').click(function () {
            console.log(23213);
            let clickedImage = $(this).find('img').attr('src');
            $(this).find('img').attr('src', $('.mainImage').find('img').attr('src'));
            $('.mainImage').find('img').attr('src', clickedImage);
        });
    };
};

$(document).ready(function () {
    var productControl = new product().initialize();
});
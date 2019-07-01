var glide = $('.slider')
    .glide()
    .data('api_glide');

glide.arrowLeftText = 'asdasd';

$(window).on('keyup', function (key) {
    if (key.keyCode === 13) {
        glide.jump(3, console.log('Wooo!'));
    }
});

$('.slider-arrow').on('click', function() {
    console.log(glide.current());
});
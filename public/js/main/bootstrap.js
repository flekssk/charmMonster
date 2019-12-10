let application = new Application();


/**
 * @returns {Application}
 */
function app() {
    return application;
}

application.bindService(new Mobile());
application.bindService(new Cart());
application.bindService(new Popup());
application.bindService(new Form());
application.bindService(new Products());
application.bindService(new Product());
application.bindService(
    new Liked(
        {
            addLink: app().getData('addLikedLink'),
            showLink: app().getData('showLikedLink'),
        }
    )
);
application.bindService(
    new Adapter(
        {
            addLink: app().getData('addLikedLink'),
            showLink: app().getData('showLikedLink'),
        }
    )
);

application.bindService(
    new User(
        {
            userId: app().getData('userId'),
            authenticateUrl: app().getData('authenticateUrl'),
        }
    )
);

/**
 *
 * @returns {Service|Cart}
 */
function cart() {
    return application.getService('Cart');
}

/**
 *
 * @returns {Service|Popup}
 */
function popup() {
    return application.getService('Popup');
}

/**
 *
 * @returns {Service|Form}
 */
function form() {
    return application.getService('Form');
}

/**
 *
 * @returns {Service|Form}
 */
function products() {
    return application.getService('Products');
}

/**
 *
 * @returns {Service|Form}
 */
function product() {
    return application.getService('Product');
}

/**
 *
 * @returns {Service|User}
 */
function user() {
    return application.getService('User');
}

$(document).ready(function () {
    $('.blogPostsContainer').slick({
        centerPadding: '60px',
        slidesToShow: 3,
        arrows: true,
        dots: true,
    });

    $('.mainPageContent').fadeIn(1000);


    $('.categoriesContainer .category').mouseover(function () {
        $(this).find('.title').css('background-color', '#d64345');
    });
    $('.categoriesContainer .category').mouseout(function () {
        $(this).find('.title').css('background-color', '#FFB2B2');
    });

    $('.blogPostsContainer .post').mouseover(function () {
        $(this).find('.title').css('background-color', '#d64345');
    });
    $('.blogPostsContainer .post').mouseout(function () {
        $(this).find('.title').css('background-color', '#FFB2B2');
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
        if (counter.val() === 0) {
            counter.val(1);
        }
    });
});
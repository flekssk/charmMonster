class Popup extends Service {
    constructor(options = {}) {
        super(options);

        let caller = this;

        $(document).ready(function () {
            $('.closePopup').click(function () {
                caller.hidePopup();
            });
        });
    };

    showPopup() {
        $('.popupWindow').fadeIn();
        $('body').css('overflow', 'hidden');
        $('.wrapper').css('filter', 'blur(7px)');
    };

    showContent(content) {
        this.showPopup();

        $('.popupContent .contentContainer').html(content);
    };

    hidePopup() {
        $('body').css('overflow', 'auto');
        $('.popupWindow').fadeOut();
        $('.wrapper').css('filter', 'none');
    };
}
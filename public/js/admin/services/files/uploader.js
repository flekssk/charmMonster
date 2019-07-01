let imagesUploader = function () {
    const caller = this;

    this.init = function () {
        caller.rebindCallback();
    };

    this.rebindCallback = function () {
        $('#fileupload').fileupload({
            url: 'http://charm.local/admin/services/file/upload',
            dataType: 'json',
            success: function (data) {
                $('#files').append(data['data']['content']);

                caller.rebindCallback();
            }
        });
        $('.deleteImage').click(this.deleteImage);
        $('.moveImageUp').click(this.moveImageUp);
        $('.moveImageDown').click(this.moveImageDown);
    };

    this.moveImageUp = function (event) {
        let parent = $(event.target).parent('div').parent('.uploadedFile');

        parent.insertBefore(parent.prev());
    };

    this.moveImageDown = function (event) {
        let parent = $(event.target).parent('div').parent('.uploadedFile');

        parent.insertAfter(parent.next());
    };

    this.deleteImage = function (event) {
        let button = $(event.target);

        $(button).parent('div').parent('div').remove();
    };
};
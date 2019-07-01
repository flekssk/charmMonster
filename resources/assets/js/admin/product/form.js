$(document).ready(function () {
    var files = $('#files')

    $('#fileupload').fileupload({
        url: 'http://charm.local/admin/services/file/upload',
        dataType: 'json',
        done: function (event, data) {
            $.each(data.result.data.uploaded, function (id, image) {
                console.log(image);
                var newImg = $('<img src="' + image + '">');
                $('#files').append($('<div class="col-lg-12 uploadedFile">').html($('<div class="col-lg-3">').prepend(newImg).prepend(image)));
            })
        }
    });
});

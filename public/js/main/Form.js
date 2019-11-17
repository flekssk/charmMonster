class Form extends Service {
    renderErrors(errors) {
        let renderedErrors = [];

        $.each(errors, function (fieldName, fieldError) {
            $('[name="' + fieldName + '"]').addClass('alert-danger');
            $.each(fieldError, function (id, error) {
                renderedErrors.push($('<div class="alert alert-danger" />').html(error));
            })
        });

        $('.errorsContainer').html(renderedErrors);
    };

    clearErrors() {
        $('input,textarea').removeClass('alert-danger');
        $('.errorsContainer').html('');
    }
}
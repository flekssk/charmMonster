class Products extends Service {
    constructor(options = {}) {
        super(options);
        let caller = this;

        $('.fastLook').click(function () {
            caller.fastLook($(this).data('link'));
        });
        $('.productContainer .productContent').mouseover(function () {
            $(this).find('.productControl').show();
            $(this).find('.title').addClass('active');
        });

        $('.productContainer .productContent').mouseout(function () {
            $(this).find('.productControl').hide();
            $(this).find('.title').removeClass('active');
        });


        $('.input-range').each(function () {
            var value = $(this).attr('data-slider-value');
            var separator = value.indexOf(',');
            if (separator !== -1) {
                value = value.split(',');
                value.forEach(function (item, i, arr) {
                    arr[i] = parseFloat(item);
                });
            } else {
                value = parseFloat(value);
            }
            $(this).slider({
                formatter: function (value) {
                    return '$' + value;
                },
                min: parseFloat($(this).attr('data-slider-min')),
                max: parseFloat($(this).attr('data-slider-max')),
                range: $(this).attr('data-slider-range'),
                value: value,
                tooltip_split: $(this).attr('data-slider-tooltip_split'),
                tooltip: $(this).attr('data-slider-tooltip')
            });

            $(this).on('change', function () {
                let values = $('#priceRange').attr('value').split(',');

                $('#minPrice').val(values[0]);
                $('#maxPrice').val(values[1]);
            });

            $('.priceFilterField').on('change', function () {
                let min = $('#minPrice').val();
                let max = $('#maxPrice').val();
                $('#priceRange').attr('value', min + ', ' + max);
                $('#priceRange').attr('data-value', min + ', ' + max);
            });
        });
    }

    fastLook(link) {
        $.ajax({
            url: link,
            dataType: 'json',
            success: function (response) {
                popup().showContent(response.content);
                $(document).ready(function () {
                    let productControl = new ProductController();
                });
            }
        });
    }
}
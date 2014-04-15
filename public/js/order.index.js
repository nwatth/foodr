$(document).ready(function() {

    $('.media').each(function (index) {
        $(this).hide().delay(index * 300).fadeIn('slow');
    });

    $('#reorder').click(function () {
        $(this).button('loading');
    });

});
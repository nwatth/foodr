$(document).ready(function() {

    $('.jumbotron > *').each(function (index) {
        $(this).hide().delay(index * 200).fadeIn('slow');
    });

});
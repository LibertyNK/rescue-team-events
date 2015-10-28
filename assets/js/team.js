var main = function() {
    $('.member').hover(function() {
        $(this).children('.shown_info').toggle();
        $(this).children('.hidden_info').fadeIn(750);
    }, function() {
        $(this).children('.hidden_info').toggle();
        $(this).children('.shown_info').fadeIn(750);
    });
}

$(document).ready(main);

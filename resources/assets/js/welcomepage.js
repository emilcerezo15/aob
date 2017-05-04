/**
 * Created by emilio.cerezo on 5/2/17.
 */
$(document).ready(function () {
    var $nav = $('nav li a');

    $(".button-collapse").sideNav();

    $nav.hover(function () {
        $nav.addClass('hover');
    }, function () {
        $nav.removeClass('hover');
    });

});
/*$(function () {
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 1 ) {
            jQuery(".navbar-default").css("background-color", "rgba(255,255,255,0.9)");
//            jQuery(".navbar-default").css("border-bottom", "1px solid rgba(170, 26, 35, 0.9)");
            jQuery(".navbar-default").addClass("animated-nav");
        } else {
            jQuery(".navbar-default").css("background-color", "transparent");
//            jQuery(".navbar-default").css("border-bottom", "0");
            jQuery(".navbar-default").removeClass("animated-nav");
        }
    });
});
*/


$(document).ready(function(){
    $('.automarkas').bxSlider({
        slideWidth: 300,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 1,
        pager: false,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>'
    });

    $('.bxslider').bxSlider({
        mode: 'fade',
        pager: false,
        captions: true,
        nextText: '',
        prevText: '',
        useCSS: false,
        easing: 'jswing',

    });
});

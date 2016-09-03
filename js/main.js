
$(document).ready(function(){
    $('.automarkas').bxSlider({
        slideWidth: 200,
        minSlides: 2,
        maxSlides: 7,
        slideMargin: 30,
        ticker: true,
        speed: 150000,
        tickerHover: true,
        onSliderLoad: function(){
            $(".bxslider-wrap").css("visibility", "visible");
        }
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

$('#nav').affix({
    offset: {
        top: $('#nav').offset().top
    }
});

$(window).scroll(function() {
    var topHeight = document.getElementById('top-links-container').offsetHeight;
    if ($(window).width() > 768) {
        if ($(document).scrollTop() > topHeight) {
            $('#navigationbar>li>a').addClass('shrink');
            $('.navbar-brand img').addClass('brand-logo-scroll');
        } else {
            $('#navigationbar>li>a').removeClass('shrink');
            $('.navbar-brand img').removeClass('brand-logo-scroll');

        }
    }
});


$(window).scroll(function(){
    if ($(this).scrollTop() > 210) {
        $('.side').addClass('z-fixed');
        $('.side').css('top','20px');
    } else {
        $('.side').removeClass('z-fixed')
    }
});
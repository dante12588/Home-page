$(window).scroll(function () {
    let scroll = $(window).scrollTop();
    let height = $(window).height();
    let bottom = (scroll + height) * 0.9;

    let html = $('.html').offset().top;
    let css = $('.css').offset().top;
    let js = $('.js').offset().top;
    let php = $('.php').offset().top;
    let sql = $('.sql').offset().top;

    if( bottom > html){
        $('.html').addClass('active');
    }

    if( bottom > css){
        $('.css').addClass('active');
    }

    if( bottom > js){
        $('.js').addClass('active');
    }

    if( bottom > php){
        $('.php').addClass('active');
    }

    if( bottom > sql){
        $('.sql').addClass('active');
    }

});
sal({
    threshold: 1,
    once: false
});

$('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop:true,
    margin:50,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1100:{
            items:5
        }
    },
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    smartSpeed: 1000,
});


$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    const nav = $('.sticky-nav');
    if( scroll > 0 ){
        nav.addClass('active');
    } else{
        nav.removeClass('active');
    }
});

$('.page-up img').click( function(){
    window.scroll({top: 0, behavior: "smooth"})
} )


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

$('.mobile-menu').click( function(){
    $('.mobile-menu').toggleClass('active');
    $('.mobile-menu-items').toggleClass('active');
    $('.mobile-menu-item').toggleClass('active');
});
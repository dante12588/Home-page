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

$('.mobile-menu').click( function(){
    $('.mobile-menu').toggleClass('active');
    $('.mobile-menu-items').toggleClass('active');
    $('.mobile-menu-item').toggleClass('active');
});

$(window).scroll(function () {
    let scroll = $(window).scrollTop();
    let height = $(window).height();
    
    if( scroll > height){
        $('.sticky-nav li').css('color', 'rgba(0, 0, 0, .85)');
        $('.sticky-nav.active ul').css('background-color', 'rgba(0, 0, 0, 0.4)');
    }
    if( scroll < height){
        $('.sticky-nav li').css('color', 'rgba(255, 255, 255, .85)');
        $('.sticky-nav.active ul').css('background-color', 'rgba(255, 255, 255, 0.1)');
    }

    if( scroll == 0){
        $('.sticky-nav ul').css('background-color', 'rgba(255, 255, 255, 0.0)');
    }
});

let frameTop = $('.project__frame');


frameTop.draggable({
  addClasses: false
});
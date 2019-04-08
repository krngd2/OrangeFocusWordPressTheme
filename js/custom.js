
( jQuery(function( $ ) {
    $('#primary-menu').find('li').each(function() {
        $(this).addClass("nav-item");
        $(this).find('a').addClass("nav-link");
    });
    $('#secondary').addClass("sidebar");
    
    $('.search-submit').replaceWith('<button class="btn search-submit"></button>')
    $('.search-submit').append('<i class="fas fa-search"></i>'); 

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 205) {
            $(".menu").addClass("menu-sticky");
        }
        else if (scroll <= 205) {
            $(".menu").removeClass("menu-sticky");
        }
    });	
    $('.navbar-light.menu form button').click(function(){
        $('.navbar-light.menu form input').toggle();
    });
    $('.login-form a').click(function(){
        $('.signin').hide();
        $('.login-form').hide();
        $('.register-form').show();
        $('.signup').show();
    });
    $('.register-form a').click(function(){
        $('.signin').show();
        $('.login-form').show();
        $('.register-form').hide();
        $('.signup').hide();
    });
}))();
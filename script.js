(function($) {
    $('.p-header__nav-btn').on('click',function(){
        $('.l-colum-nav').css({
            transform:'translate(0)',
            transition:".5s"
        });
        $('.p-nav__background').show();
    }
    );
    $('.p-nav__btn').on('click',function(){
        $('.l-colum-nav').css({
            transform:'translate(367px)',
            transiton:".5s"
        });
        $('.p-nav__background').hide();
    }
    );
    $(window).on('resize',function(){
        if($(this).width()>=1895)
        {
            $('.l-colum-nav').css({
                transform:'translate(0)',
                transition:"none"    
            });
            $('.p-nav__background').hide();
        }else{
            $('.l-colum-nav').css({
                transform:'translate(367px)',
                transiton:"none"    
            });
            $('.p-nav__background').hide();

        }
    });
})( jQuery );

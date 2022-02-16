(function($){

    $(document).ready(function(){
        $('.mobileMenu').on('click', function(){
            $('.menuMobile').toggleClass('menuMobile--active');
            if($('.menuMobile').hasClass('menuMobile--active')){
                $('html').addClass('no-scroll');
                $(this).addClass('active');
            }else{
                $('html').removeClass('no-scroll');
                $(this).removeClass('active');
            }
        });
        $('.mobileSearch').on('click', function(){
            if(!$('.menuMobile').hasClass('menuMobile--active')){
                $('.menuMobile').addClass('menuMobile--active');
                $('html').addClass('no-scroll');
                $('.mobileMenu').addClass('active');

                setTimeout(function(){
                    $('.menuMobile__search').find('input[name="s"]').focus();
                }, 1200);
            }else{
                $('.menuMobile__search').find('input[name="s"]').focus();
            }
        });
    });

}(jQuery));
(function($){

    // Delete back to top
    $(document).ready(function(){
        $('#ruby-back-top').remove();
    }); 

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


    // Promobar
    $(document).ready(function(){
        var height = $('.promobar').height();
        $('.promobar__clone').css('height', height);
    });

    // Article advert
    $(document).ready(function(){
        if($('.psibufet-article-banner').length){
            var imageURL = $('.single-banner-data').data('image-url');
            var imageAlt = $('.single-banner-data').data('image-alt');
            var url = $('.single-banner-data').data('url');

            $('.psibufet-article-banner').each(function(){
                $(this).append().html('<a href="' + url + '"><img src="' + imageURL + '" alt="' + imageAlt + '"/></a>');
            });
        }
    });

}(jQuery));
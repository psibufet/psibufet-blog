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

        // Banner #1
        if($('.psibufet-article-banner').length){
            let imageURL = $('.single-banner-data').data('image-url'),
                imageAlt = $('.single-banner-data').data('image-alt'),
                url = $('.single-banner-data').data('url');

            $('.psibufet-article-banner').each(function(){
                $(this).append().html('<a href="' + url + '"><img src="' + imageURL + '" alt="' + imageAlt + '"/></a>');
            });
        }
        
        // Banner #2
        if($('.psibufet-full-banner').length){
            let imageURL = $('.full-banner-data').data('image-url'),
                imageAlt = $('.full-banner-data').data('image-alt'),
                url = $('.full-banner-data').data('url');

            $('.psibufet-full-banner').each(function(){
                $(this).append().html('<a href="' + url + '"><img src="' + imageURL + '" alt="' + imageAlt + '"/></a>');
            });
        }

        // USP banner
        if($('.psibufet-usp-banner').length){
            let bannerData = $('.single-psibufet-data'),
                logo = bannerData.data('logo-url'),
                logoAlt = bannerData.data('logo-alt'),
                url = bannerData.data('url'),
                title = bannerData.data('title'),
                usp = bannerData.find('span');

            $('.psibufet-usp-banner').each(function(){
                let $this = $(this);
                $this.append().html('<img src="' + logo + '" alt="' + logoAlt + '"/><h3>' + title + '</h3><div class="usp"></div>');

                let uspContainer = $this.find('.usp');

                $(usp).each(function(){
                    let icon = $(this).data('icon-url'),
                        iconAlt = $(this).data('icon-alt'),
                        text = $(this).data('text');

                    uspContainer.append('<div class="usp__pos"><img src="' + icon + '" alt="' + iconAlt + '"/><p>' + text + '</p></div>');
                });

                uspContainer.after('<div class="cta"><a href="' + url + '" class="btn btn--center"><span>Dowiedz się więcej</span></a></div>');
            });
        }
    });

}(jQuery));
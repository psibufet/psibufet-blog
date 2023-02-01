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
                $this.append().html('<a href="' + url + '"><img src="' + logo + '" alt="' + logoAlt + '"/><h3>' + title + '</h3><div class="usp"></div></a>');

                let uspContainer = $this.find('.usp');

                $(usp).each(function(){
                    let icon = $(this).data('icon-url'),
                        iconAlt = $(this).data('icon-alt'),
                        text = $(this).data('text');

                    uspContainer.append('<div class="usp__pos"><img src="' + icon + '" alt="' + iconAlt + '"/><p>' + text + '</p></div>');
                });

                uspContainer.after('<div class="cta"><a href class="btn btn--center"><span>Dowiedz się więcej</span></a></div>');
            });
        }
    });

    /**
     * Letter selector
     */
    $(document).ready(function(){
        $('.letterSelector h4').each(function(){
            let name = $(this).attr('class');

            $(this).on('click', function(){
                $('html, body').animate({
                    scrollTop: $('div.' + name).offset().top - 150
                }, 1000);
            });
        })
    });

    /**
     * Single post heading - reading time
     */
    $(document).ready(function(){
        var readingtime = $('meta[name="twitter:data2"]').prop('content');
        $('#readTime').html(readingtime);
    });

    /**
     * Main page products list slider
     */
    $(document).ready(function(){
        if($(window).width() < 768){
            $('.mainProducts__wrap').slick({
                slidesToScroll: 1,
                infinite: true,
                variableWidth: true,
                centerMode: true,
            });
        }
    });

    /**
     * User article review
     */
    $(document).ready(function(){
        var review;

        $('#review-bad').on('click', function(){
            review = 'bad';
            $('#postReview').submit();
        });
        $('#review-good').on('click', function(){
            review = 'good';
            $('#postReview').submit();
        });

        $('#postReview').on('submit', function(e){
            e.preventDefault();

            var postid = $(this).attr('postid');
            let data = {
                action: 'postReview',
                type: review,
                postid: postid,
            }
            console.log(data);
            $.ajax({
                type: 'POST',
                url: blog.ajaxurl,
                data: data,
                success: function(response){
                    console.log(response);
                    if(response == 'done'){
                        $('.userReview').find('.userReview__types').addClass('hide');
                        $('.userReview').find('.userReview__done').removeClass('hide');
                    }
                }
            })
        });
    });
}(jQuery));
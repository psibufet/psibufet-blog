(function($){
    $(document).ready(function(){
        var mobilenav = $('.menuMobile'),
            mobilebtn = $('.mobileMenu'),
            mobilesearch = $('.mobileSearch'),
            desktopnav = $('#navigation');
            desktopsearch = $('.searchBar').find('form');
            slidernav = $('.fw-block-slider-hw').find('.ruby-slider-hw-nav');

        slidernav.remove();

        if($(window).width() > 991){
            if(mobilenav.length){
                mobilenav.remove();
                mobilebtn.remove();
                mobilesearch.remove();
            }
        }else{
            if(desktopnav.length){
                desktopnav.remove();
                desktopsearch.remove();
            }
        }

        $('article.post-list').each(function(){
            var meta = $(this).find('.post-meta-info');
            var asideMeta = $(this).find('aside.post-meta');

            if(meta.length && asideMeta.length){
                meta.remove();
                asideMeta.remove();
            }
            if($(window).width() < 768){
                $(this).find('.post-excerpt').remove();
            }
        });
    });

    /**
     * Remove main posts blog page
     */
    $(document).ready(function(){
        if($('body').hasClass('blog')){
            $('#ruby-site-content').find('.feat-wrap').remove();
        }
    });
}(jQuery));
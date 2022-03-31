/*--------------------------------------------------------------
 LOOK MAN SCRIPT
 --------------------------------------------------------------*/
var look_ruby_to_top;
var look_ruby_to_top_mobile;
var look_ruby_tfooter_instagram_popup;
var look_ruby_sb_instagram_popup;
var look_ruby_single_image_popup;
var look_ruby_site_bg_link;

(function ($) {
    "use strict";
    var look_ruby = {};

    look_ruby.window = $(window);
    look_ruby.document = $(document);
    look_ruby.html = $('html, body');
    look_ruby.body = $('body');
    look_ruby.blog_content = $('#ruby-site-content');
    look_ruby.touch = Modernizr.touch;
    look_ruby.ios = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
    look_ruby.window_last_pos = 0;
    look_ruby.ajax_running = false;
    look_ruby.direction = '';
    look_ruby.$wHeight = $(window).height();
    look_ruby.$delay = 1;

    //slider
    look_ruby.auto_play = true;
    look_ruby.auto_play_speed = 5000;
    look_ruby.play_speed = 400;
    look_ruby.prev_arrow = '<div class="ruby-slider-prev ruby-slider-nav"></div>';
    look_ruby.next_arrow = '<div class="ruby-slider-next ruby-slider-nav"></div>';
    look_ruby.prev_arrow_small = '<div class="ruby-slider-prev-small ruby-slider-nav-small"><i class="fa-rb fa-angle-left" aria-hidden="true"></i></div>';
    look_ruby.next_arrow_small = '<div class="ruby-slider-next-small ruby-slider-nav-small"><i class="fa-rb fa-angle-right" aria-hidden="true"></i></div>';
    look_ruby.get_rtl = function () {
        return look_ruby.body.hasClass('rtl');
    };

    look_ruby.ajax = {};
    look_ruby.waypoint_item = [];

    look_ruby.ajax_blog_data = function (blog) {
        var param = {};
        param.blog_layout = blog.data('blog_layout');
        param.posts_per_page = blog.data('posts_per_page');
        param.blog_page_max = blog.data('blog_page_max');
        param.blog_page_current = blog.data('blog_page_current');
        param.big_first = blog.data('big_first');
        param.blog_sidebar_position = blog.data('blog_sidebar_position');
        param.category_id = blog.data('category_id');

        return param;
    };

    $(document).ready(function () {
        look_ruby_document_ready();
        look_ruby_document_reload();


    });


    /**-------------------------------------------------------------------------------------------------------------------------
     *  document.ready()
     */
    function look_ruby_document_ready() {

        //featured slider
        look_ruby_block_fw_slider();
        look_ruby_block_fw_slider_2();
        look_ruby_block_hw_slider();
        look_ruby_block_fw_carousel();
        look_ruby_block_fw_carousel_1();

        //hide counter
        look_ruby_hide_share_counter();

        //instagram popup
        look_ruby_sb_widget_instagram_popup();
        look_ruby_tfooter_widget_instagram_popup();

        //back to top
        look_ruby_back_to_top();

        //smooth scroll
        look_ruby_enable_smooth_scroll();
        look_ruby_smooth_scroll_TOC();
        look_ruby_touch_menu();

        //sticky navigation
        look_ruby_enable_sticky_navigation();

        //search form popup
        look_ruby_search_popup();

        //off canvas toggle
        look_ruby_off_canvas_toggle();

        //social tooltip
        look_ruby_enable_social_tooltip();

        //singe page popup
        look_ruby_single_page_featured_popup();

        //remove thumb holder
        look_ruby_remove_holder();

        //video playlist
        look_ruby_video_playlist();
        look_ruby_iframe_playlist_autoplay();

        //site bg link
        look_ruby_body_click();

        //ajax load more
        look_ruby_blog_loadmore();

        look_ruby_single_infinite();
        look_ruby_scroll_update_url();

    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * reload after ajax
     */
    function look_ruby_document_reload() {
        //gallery post
        look_ruby_post_gallery_gird();
        look_ruby_gallery_slider();

        //smooth display
        look_ruby_enable_smooth_display();


        //iframe responsive
        look_ruby_iframe_responsive();

        //sticky sidebar
        look_ruby_enable_sticky_sidebar();

        //mini slider
        look_ruby_block_mini_slider();

        //single content popup
        look_ruby_single_post_content_popup();
        look_ruby_post_gallery_popup();
        look_ruby_single_post_featured_popup();

        //review progress bar
        look_ruby_animation_progress_bar();

        //blog infinite
        look_ruby_blog_infinite();
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * re initiate all function after ajax
     */
    function look_ruby_reinitiate_function() {

        //remove event handle
        look_ruby.html.off();
        look_ruby.document.off();

        //trigger load
        look_ruby.window.trigger('load');

        //reload function
        look_ruby_document_reload();
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * ajax cache
     * @type {{data: {}, get: Function, set: Function, remove: Function, exist: Function}}
     */
    var look_ruby_cache = {
        data: {},

        //get cache
        get: function (id) {
            return look_ruby_cache.data[id];
        },

        //set cache
        set: function (id, data) {
            look_ruby_cache.remove(id);
            look_ruby_cache.data[id] = data;
        },

        //remove cache
        remove: function (id) {
            delete look_ruby_cache.data[id];
        },

        //empty cache
        exist: function (id) {
            return look_ruby_cache.data.hasOwnProperty(id) && look_ruby_cache.data[id] !== null;
        }
    };


    /**-------------------------------------------------------------------------------------------------------------------------
     *  video responsive
     */
    function look_ruby_iframe_responsive() {
        $('.entry').each(function () {
            var entry_el = $(this);
            if (false == entry_el.hasClass('iframe-loaded')) {
                entry_el.fitVids();
                entry_el.addClass('iframe-loaded');
            }
        });
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * feat slider fw
     */
    function look_ruby_block_fw_slider() {
        var block_fw_slider = $('.ruby-slider-fw');
        if (block_fw_slider.length > 0) {
            block_fw_slider.each(function () {

                var block_fw_slider_el = $(this);
                block_fw_slider_el.on('init', function () {
                    block_fw_slider_el.imagesLoaded(function () {
                        block_fw_slider_el.prev('.slider-loading').fadeOut(200, function () {
                            $(this).remove();
                            block_fw_slider_el.removeClass('slider-init');
                        });
                    });
                });

                block_fw_slider_el.slick({
                    dots: true,
                    infinite: true,
                    autoplay: look_ruby.auto_play,
                    autoplaySpeed: look_ruby.auto_play_speed,
                    speed: look_ruby.play_speed,
                    adaptiveHeight: false,
                    arrows: true,
                    rtl: look_ruby.get_rtl(),
                    prevArrow: look_ruby.prev_arrow,
                    nextArrow: look_ruby.next_arrow
                });
            });
        }
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * feat slider fw 2
     */
    function look_ruby_block_fw_slider_2() {
        var block_fw_slider = $('.ruby-slider-fw-2');
        if (block_fw_slider.length > 0) {
            block_fw_slider.each(function () {

                var block_fw_slider_el = $(this);
                block_fw_slider_el.on('init', function () {
                    block_fw_slider_el.imagesLoaded(function () {
                        block_fw_slider_el.prev('.slider-loading').fadeOut(200, function () {
                            $(this).remove();
                            block_fw_slider_el.removeClass('slider-init');
                        });
                    });
                });

                block_fw_slider_el.slick({
                    dots: true,
                    infinite: true,
                    fade: true,
                    cssEase: 'linear',
                    autoplay: look_ruby.auto_play,
                    autoplaySpeed: look_ruby.auto_play_speed,
                    speed: 800,
                    adaptiveHeight: false,
                    arrows: true,
                    rtl: look_ruby.get_rtl(),
                    prevArrow: look_ruby.prev_arrow,
                    nextArrow: look_ruby.next_arrow
                });
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * block has wrapper slider
     */
    function look_ruby_block_hw_slider() {
        var block_hw_slider = $('.ruby-slider-hw');
        if (block_hw_slider.length > 0) {
            block_hw_slider.each(function () {

                var block_hw_slider_el = $(this);
                var block_hw_slider_nav_el = $(this).next('.ruby-slider-hw-nav');

                block_hw_slider_el.on('init', function () {
                    block_hw_slider_el.imagesLoaded(function () {
                        block_hw_slider_el.prev('.slider-loading').fadeOut(200, function () {
                            $(this).remove();
                            block_hw_slider_el.removeClass('slider-init');
                        });
                    });
                });

                block_hw_slider_nav_el.on('init', function () {
                    block_hw_slider_nav_el.imagesLoaded(function () {
                        block_hw_slider_nav_el.removeClass('slider-init');
                    });
                });


                block_hw_slider_el.slick({
                    dots: true,
                    infinite: true,
                    autoplay: look_ruby.auto_play,
                    autoplaySpeed: look_ruby.auto_play_speed,
                    speed: look_ruby.play_speed,
                    adaptiveHeight: false,
                    arrows: true,
                    rtl: look_ruby.get_rtl(),
                    asNavFor: block_hw_slider_nav_el,
                    prevArrow: look_ruby.prev_arrow,
                    nextArrow: look_ruby.next_arrow
                });

                block_hw_slider_nav_el.slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: false,
                    rtl: look_ruby.get_rtl(),
                    asNavFor: block_hw_slider_el,
                    centerMode: false,
                    focusOnSelect: true
                });
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * block fw carousel
     */
    function look_ruby_block_fw_carousel() {

        var block_carousel_padding1 = '300px';
        var block_carousel_padding2 = '250px';
        var block_carousel_padding3 = '200px';

        //check boxed layout
        if (look_ruby.body.hasClass('is-boxed')) {
            block_carousel_padding1 = '160px';
            block_carousel_padding2 = '160px';
            block_carousel_padding3 = '160px';
        }

        var block_carousel_fw = $('.ruby-carousel');
        if (block_carousel_fw.length > 0) {

            block_carousel_fw.each(function () {
                var block_carousel_fw_el = $(this);
                block_carousel_fw_el.on('init', function () {
                    block_carousel_fw_el.imagesLoaded(function () {
                        block_carousel_fw_el.prev('.slider-loading').fadeOut(400, function () {
                            $(this).remove();
                            block_carousel_fw_el.removeClass('slider-init');
                        });
                    });
                });
                block_carousel_fw_el.slick({
                    centerMode: true,
                    infinite: true,
                    autoplay: look_ruby.auto_play,
                    autoplaySpeed: look_ruby.auto_play_speed,
                    speed: look_ruby.play_speed,
                    wipeToSlide: 1,
                    centerPadding: block_carousel_padding1,
                    adaptiveHeight: false,
                    rtl: look_ruby.get_rtl(),
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: true,
                    prevArrow: look_ruby.prev_arrow,
                    nextArrow: look_ruby.next_arrow,
                    responsive: [
                        {
                            breakpoint: 1500,
                            settings: {
                                centerMode: true,
                                dots: true,
                                arrows: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: block_carousel_padding2
                            }
                        },
                        {
                            breakpoint: 1400,
                            settings: {
                                dots: true,
                                centerMode: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: block_carousel_padding3
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                dots: true,
                                arrows: true,
                                centerMode: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: '160px'
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                dots: true,
                                arrows: true,
                                centerMode: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: '120px'

                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                dots: true,
                                centerMode: true,
                                arrows: false,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: '40px'
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                dots: true,
                                arrows: false,
                                centerMode: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: '20px'
                            }
                        }
                    ]
                });
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * block fw carousel
     */
    function look_ruby_block_fw_carousel_1() {
        var block_carousel_fw = $('.ruby-carousel-1');
        if (block_carousel_fw.length > 0) {

            var slider_show = 4;
            var slider_scroll = 4;
            //check boxed layout
            if (look_ruby.body.hasClass('is-boxed')) {
                slider_show = 3;
                slider_scroll = 3;
            }

            block_carousel_fw.each(function () {
                var block_carousel_fw_el = $(this);

                block_carousel_fw_el.on('init', function () {
                    block_carousel_fw_el.imagesLoaded(function () {
                        block_carousel_fw_el.prev('.slider-loading').fadeOut(400, function () {
                            $(this).remove();
                            block_carousel_fw_el.removeClass('slider-init');
                        });
                    });
                });
                block_carousel_fw_el.slick({
                    infinite: true,
                    autoplay: look_ruby.auto_play,
                    autoplaySpeed: look_ruby.auto_play_speed,
                    speed: look_ruby.play_speed,
                    wipeToSlide: slider_scroll,
                    adaptiveHeight: false,
                    centerMode: false,
                    rtl: look_ruby.get_rtl(),
                    slidesToShow: slider_show,
                    slidesToScroll: slider_scroll,
                    dots: true,
                    arrows: true,
                    prevArrow: look_ruby.prev_arrow,
                    nextArrow: look_ruby.next_arrow,
                    responsive: [
                        {
                            breakpoint: 1400,
                            settings: {
                                dots: true,
                                arrows: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                dots: true,
                                arrows: true,
                                centerMode: false,
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                dots: true,
                                arrows: false,
                                centerMode: false,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        }
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * feat slider mini
     */
    function look_ruby_block_mini_slider() {
        var block_mini_slider = $('.ruby-mini-slider');
        if (block_mini_slider.length > 0) {
            block_mini_slider.each(function () {
                var block_mini_slider_el = $(this);

                //unslick
                if (block_mini_slider_el.hasClass('slick-initialized')) {
                    block_mini_slider_el.slick('unslick');
                }

                block_mini_slider_el.on('init', function () {
                    block_mini_slider_el.imagesLoaded(function () {
                        block_mini_slider_el.prev('.slider-loading').fadeOut(400, function () {
                            $(this).remove();
                            block_mini_slider_el.removeClass('slider-init');
                        });
                    });
                });

                block_mini_slider_el.slick({
                    infinite: true,
                    autoplay: look_ruby.auto_play,
                    autoplaySpeed: look_ruby.auto_play_speed,
                    speed: look_ruby.play_speed,
                    adaptiveHeight: false,
                    arrows: true,
                    dots: false,
                    rtl: look_ruby.get_rtl(),
                    prevArrow: look_ruby.prev_arrow_small,
                    nextArrow: look_ruby.next_arrow_small
                });
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * hide counter text
     */
    function look_ruby_hide_share_counter() {
        $('.post-share-bar-inner').hover(function () {
            $(this).next().css('opacity', 0);
        }, function () {
            $(this).next().css('opacity', 1);
        })
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * look_ruby gallery grid
     */
    function look_ruby_post_gallery_gird() {
        var gallery_grid = $('.ruby-gallery-grid');
        if (gallery_grid.length > 0) {
            gallery_grid.each(function () {
                var gallery_grid_el = $(this);
                if (!gallery_grid_el.hasClass('gallery-loaded')) {
                    gallery_grid_el.fadeIn(300).justifiedGallery({
                        lastRow: 'justify',
                        rowHeight: 200,
                        maxRowHeight: 250,
                        fixedHeight: false,
                        rel: 'gallery',
                        waitThumbnailsLoad: true,
                        margins: 3,
                        captions: false,
                        refreshTime: 250,
                        imagesAnimationDuration: 300,
                        randomize: false,
                        sizeRangeSuffixes: {lt100: "", lt240: "", lt320: "", lt500: "", lt640: "", lt1024: ""}
                    }).on('jg.complete', function () {

                        //remove loading class
                        gallery_grid_el.removeClass('slider-init');
                        gallery_grid_el.addClass('gallery-loaded');
                        gallery_grid_el.prev('.slider-loading').fadeOut(400, function () {
                            $(this).remove();
                        });

                        //refresh waypoint
                        setTimeout(function () {
                            Waypoint.refreshAll();
                        }, 100);

                        gallery_grid_el.find('a').magnificPopup({
                            type: 'image',
                            // Delay in milliseconds before popup is removed
                            removalDelay: 200,
                            // Class that is added to popup wrapper and background
                            // make it unique to apply your CSS animations just to this exact popup
                            mainClass: 'mfp-fade',
                            closeOnContentClick: true,
                            closeBtnInside: true,
                            gallery: {
                                enabled: true,
                                navigateByImgClick: true,
                                preload: [0, 1]
                            }
                        });
                    });
                }
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * look_ruby gallery slider
     */
    function look_ruby_gallery_slider() {
        var gallery_slider = $('.ruby-gallery-slider');
        if (gallery_slider.length > 0) {
            gallery_slider.each(function () {
                var gallery_slider_el = $(this);
                if (!gallery_slider_el.hasClass('gallery-loaded')) {
                    gallery_slider_el.on('init', function () {
                        gallery_slider_el.imagesLoaded(function () {
                            gallery_slider_el.prev('.slider-loading').fadeOut(200, function () {
                                $(this).remove();
                                gallery_slider_el.removeClass('slider-init');
                                gallery_slider_el.addClass('gallery-loaded');

                                //refresh waypoint
                                setTimeout(function () {
                                    Waypoint.refreshAll();
                                }, 100);
                            });
                        });

                    });

                    gallery_slider_el.slick({
                        dots: true,
                        infinite: true,
                        autoplay: look_ruby.auto_play,
                        autoplaySpeed: look_ruby.auto_play_speed,
                        speed: look_ruby.play_speed,
                        adaptiveHeight: false,
                        arrows: true,
                        rtl: look_ruby.get_rtl(),
                        prevArrow: look_ruby.prev_arrow,
                        nextArrow: look_ruby.next_arrow
                    });
                }
            })
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * sidebar instagram popup images
     */
    function look_ruby_sb_widget_instagram_popup() {
        if ('undefined' != typeof (look_ruby_sb_instagram_popup) && 1 == look_ruby_sb_instagram_popup) {
            $('.instagram-content-wrap .instagram-el a').magnificPopup({
                type: 'image',
                removalDelay: 200,
                mainClass: 'mfp-fade',
                closeOnContentClick: true,
                closeBtnInside: true,
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                }
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * top footer instagram popup images
     */
    function look_ruby_tfooter_widget_instagram_popup() {
        if ('undefined' != typeof (look_ruby_tfooter_instagram_popup) && 1 == look_ruby_tfooter_instagram_popup) {
            $('.instagram-content-wrap .footer-instagram-el a').magnificPopup({
                type: 'image',
                removalDelay: 200,
                mainClass: 'mfp-fade',
                closeOnContentClick: true,
                closeBtnInside: true,
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                }
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     *  Back to top
     */
    function look_ruby_back_to_top() {
        if (1 == look_ruby_to_top) {
            if (1 == look_ruby_to_top_mobile) {
                $().UItoTop({
                    containerID: 'ruby-back-top', //fading element id
                    easingType: 'easeOutQuart',
                    text: '<i class="fa-rb fa-long-arrow-up" aria-hidden="true"></i>',
                    containerHoverID: 'ruby-back-top-inner',
                    scrollSpeed: 800
                });
            } else {
                if (false === look_ruby.touch) {
                    $().UItoTop({
                        containerID: 'ruby-back-top', //fading element id
                        easingType: 'easeOutQuart',
                        text: '<i class="fa-rb fa-long-arrow-up" aria-hidden="true"></i>',
                        containerHoverID: 'ruby-back-top-inner',
                        scrollSpeed: 800
                    });
                }
            }
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * sticky sidebar
     */
    function look_ruby_enable_sticky_sidebar() {
        look_ruby.window.load(function () {
            var sidebars = $('.ruby-sidebar-sticky');
            if (sidebars.length > 0) {
                $('body').imagesLoaded(function () {
                    RubyStickySidebar.stick(sidebars);
                });
            }
        });
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * site smooth scroll
     */
    function look_ruby_enable_smooth_scroll() {
        if (look_ruby.body.hasClass('is-site-smooth-scroll')) {
            ruby_smooth_scroll();
        }
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * site smooth scroll
     */
    function look_ruby_smooth_scroll_TOC() {
        var TOC = $('#ruby-table-contents');
        if (TOC.hasClass('rb-smooth-scroll')) {
            look_ruby.html.css('scroll-behavior', 'smooth');
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * site smooth display
     */
    function look_ruby_enable_smooth_display() {
        var flag = false;
        look_ruby.blog_content.imagesLoaded(function () {
            if (false === flag) {
                look_ruby_animated_image();
                flag = true;
            }
        });

        //set timeout for slow load
        setTimeout(function () {
            if (false === flag) {
                look_ruby_animated_image();
                flag = true;
            }
        }, 1000);
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * animating images
     */
    function look_ruby_animated_image() {
        $('.ruby-animated-image').each(function () {
            var that = $(this);
            var delay = 50 + (that.offset().left / 3.5);
            that.waypoint({
                handler: function () {
                    setTimeout(function () {
                        that.addClass('ruby-animation');
                    }, delay);
                },
                offset: '97%',
                triggerOnce: true
            });
        })
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * sticky navigation
     */
    function look_ruby_enable_sticky_navigation() {

        if (look_ruby.body.hasClass('is-sticky-nav')) {

            var topSpacing = 0;
            var smartSticky = false;
            if (look_ruby.body.hasClass('admin-bar')) {
                topSpacing = 32;
            }

            var navOuter = $('.header-nav-wrap');
            var nav = $('.header-nav-inner');
            navOuter.css('min-height', nav.height());

            if (look_ruby.body.hasClass('is-smart-sticky')) {
                smartSticky = true;
            }
            nav.sticky({
                className: 'ruby-is-stick',
                topSpacing: topSpacing,
                responsiveWidth: true,
                smartSticky: smartSticky,
                zIndex: 9800
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * search form popup
     */
    function look_ruby_search_popup() {
        //login mfp
        $('#ruby-banner-search').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#name',
            closeBtnInside: false,
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = this.st.el.attr('data-effect');
                    if (jQuery(window).width() < 768) {
                        this.st.focus = false;
                    }
                }
            }
        });

        $('#ruby-nav-search').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#name',
            closeBtnInside: false,
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = this.st.el.attr('data-effect');
                    if (jQuery(window).width() < 768) {
                        this.st.focus = false;
                    }
                }
            }
        });
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * off canvas toggle
     */
    function look_ruby_off_canvas_toggle() {
        var off_canvas_btn = $('.ruby-trigger');
        var btn_close = $('#ruby-off-canvas-close-btn');
        var site_mask = $('.main-site-mask');

        off_canvas_btn.click(function () {
            look_ruby.body.toggleClass('mobile-js-menu');
            return false;
        });

        site_mask.click(function () {
            look_ruby.body.toggleClass('mobile-js-menu');
            return false;
        });

        btn_close.click(function () {
            look_ruby.body.toggleClass('mobile-js-menu');
            return false;
        });

        //show hide sub off canvas menu
        var off_canvas_nav = $('.off-canvas-nav-wrap');
        var off_canvas_nav_sub_a = off_canvas_nav.find('li.menu-item-has-children >a');
        off_canvas_nav_sub_a.append('<span class="explain-menu"><span class="explain-menu-inner"><i class="fa-rb fa-angle-down" aria-hidden="true"></i></span></span>');
        var explain_mobile_menu = $('.explain-menu');
        explain_mobile_menu.click(function () {
            $(this).closest('.menu-item-has-children').toggleClass('show-sub-menu');
            return false;
        });
    }

    function look_ruby_touch_menu() {
        if (look_ruby.touch && look_ruby.html.width() > 992) {

            var main_navigation = $('.main-nav-inner');
            var item_has_child = main_navigation.children('.menu-item-has-children');
            item_has_child.children('a').append('<span class="explain-menu"><span class="explain-menu-inner"><i class="fa-rb fa-angle-down" aria-hidden="true"></i></span></span>');
            var explain_mobile_menu = main_navigation.find('.explain-menu');
            explain_mobile_menu.click(function () {
                $(this).parent('.menu-item-has-children').toggleClass('show-sub-menu');
                return false;
            });
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * progress bar animation
     */
    function look_ruby_animation_progress_bar() {

        var progress_bar = $('.score-bar');
        progress_bar.each(function () {
            $(this).addClass('score-remove');
        });

        progress_bar.each(function () {
            var that = $(this);
            that.waypoint({
                    handler: function () {
                        that.removeClass('score-remove');
                        that.addClass('score-animation');
                    },
                    offset: '85%'
                }
            )
        });
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * social tooltip
     */
    function look_ruby_enable_social_tooltip() {
        if (look_ruby.body.hasClass('is-social-tooltip') && (false === look_ruby.ios) && (false === look_ruby.touch)) {
            $('.social-link-info').find('a').tipsy({fade: true});
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * single post featured popup image
     */
    function look_ruby_single_post_featured_popup() {
        $('.single .post-thumb.is-image-single a').magnificPopup({
            type: 'image',
            removalDelay: 500,
            mainClass: 'mfp-fade',
            closeOnContentClick: true,
            closeBtnInside: true
        });
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * single page featured popup image
     */
    function look_ruby_single_page_featured_popup() {
        $('.page-template-default .post-thumb.is-image-single a').magnificPopup({
            type: 'image',
            removalDelay: 500,
            mainClass: 'mfp-fade',
            closeOnContentClick: true,
            closeBtnInside: true
        });
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     *  single image popup as gallery
     */
    function look_ruby_single_post_content_popup() {
        if (1 == look_ruby_single_image_popup) {

            var single_entry = $('.single .entry');

            if (single_entry.length > 0) {
                single_entry.each(function () {
                    var single_entry_el = $(this);
                    var single_popup_last_item = null;

                    single_entry_el.find('a img').each(function () {
                        var image_wrap = $(this).parent();
                        var image_link = image_wrap.attr('href');
                        if ('undefined' !== typeof image_link && image_link.indexOf('wp-content/uploads') > 0) {
                            image_wrap.addClass('single-popup');
                        }
                    });

                    single_entry_el.magnificPopup({
                        type: 'image',
                        removalDelay: 500,
                        mainClass: 'mfp-fade',
                        delegate: '.single-popup',
                        closeOnContentClick: true,
                        closeBtnInside: true,
                        gallery: {
                            enabled: true
                        },
                        callbacks: {
                            change: function (item) {
                                single_popup_last_item = item.el;
                                look_ruby_scroll_view(item.el);
                            },
                            beforeClose: function () {
                                if (single_popup_last_item) {
                                    look_ruby_scroll_view(single_popup_last_item);
                                }
                            }
                        }
                    });
                });
            }
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * scrolling into view
     * @param element
     */
    function look_ruby_scroll_view(element) {

        if (true === look_ruby.touch) {
            return;
        }

        look_ruby.html.stop();

        var destination = element.offset().top;
        destination = destination - 150;


        //go to destination
        look_ruby.html.animate(
            {scrollTop: destination},
            {
                duration: 500,
                easing: 'easeInOutQuart'
            }
        );
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * remove thumb holder
     */
    function look_ruby_remove_holder() {
        var post_wrap = $('.post-wrap');
        if (post_wrap.length > 0) {
            post_wrap.each(function () {
                var post_wrap_el = $(this);
                post_wrap_el.imagesLoaded(function () {
                    post_wrap_el.find('.post-thumb').removeClass('ruby-holder');
                })
            })
        }

    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * post gallery popup
     */
    function look_ruby_post_gallery_popup() {
        $('.post-thumb.is-gallery').find('a').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: true,
            removalDelay: 500,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            }
        });
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * infinite single scrolling
     */
    function look_ruby_single_infinite() {

        var infiniteWrapper = $('#single-post-infinite');
        var infiniteAnimation = $('#infinite-scroll-holder');
        var animationIcon = infiniteAnimation.find('.infinite-icon');

        if (infiniteWrapper.length == 0 || infiniteAnimation.length == 0) {
            return;
        }

        infiniteWrapper.imagesLoaded(function () {
            look_ruby.single_infinite_waypoint = new Waypoint({
                element: infiniteAnimation,
                offset: '70%',
                handler: function (direction) {

                    if (look_ruby.ajax_running || 'up' == direction) {
                        return;
                    }

                    look_ruby.ajax_running = true;
                    animationIcon.animate({opacity: 1}, 200);

                    $.ajax({
                        type: 'POST',
                        url: look_ruby_ajax_url,
                        data: {
                            action: 'look_ruby_ajax_single_infinite_load',
                            post_id: infiniteWrapper.data('next_post_id')
                        },

                        success: function (data) {
                            data = $.parseJSON(data);

                            if ('undefined' != typeof( data.next_post_id)) {
                                infiniteWrapper.data('next_post_id', data.next_post_id);
                            } else {
                                infiniteWrapper.removeAttr('id');
                                infiniteAnimation.remove();
                            }

                            if (data.content) {
                                animationIcon.css({'opacity': 0});
                                infiniteWrapper.append(data.content);
                                look_ruby.ajax_running = false;
                            }

                            //reload
                            look_ruby_scroll_update_url();

                            setTimeout(function () {
                                Waypoint.refreshAll();
                                look_ruby_reinitiate_function();
                            }, 1);
                        }
                    });

                }
            });
        });
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * update infinite single url
     */
    function look_ruby_scroll_update_url() {

        var infiniteWrapper = $('#single-post-infinite');
        if (infiniteWrapper.length == 0) {
            return;
        }

        var articleOuter = infiniteWrapper.find('.single-post-outer');
        if (articleOuter.length > 0) {

            var self = look_ruby;
            var scroll;
            var articleData = [];

            articleOuter.each(function () {
                var article = $(this);
                articleData.push({
                    postID: article.data('post_id'),
                    postURL: article.data('post_url'),
                    postTitle: article.find('h1.entry-title').text(),
                    top: article.offset().top,
                    bottom: article.offset().top + article.outerHeight(true)
                });
            });

            if (window.addEventListener) {
                window.addEventListener('scroll', function () {
                    if (self.$delay % 3 == 1) {
                        lookSingleInfiniteAction(articleData);
                        self.$delay = 1;
                    } else {
                        self.$delay++;
                    }
                }, false);

            } else if (window.attachEvent) {
                window.attachEvent('onscroll', function () {
                    if (self.$delay % 3 == 0) {
                        lookSingleInfiniteAction(articleData);
                        self.$delay = 1;
                    } else {
                        self.$delay++;
                    }
                });
            }
        }
    }

    /**
     * single update title Info
     * @param articleData
     */
    function lookSingleInfiniteAction(articleData) {

        var scrollTop = $(window).scrollTop();
        articleData.every(function (element) {
            if (scrollTop > element.top && scrollTop < element.bottom) {

                if (element.postID != look_ruby.currentArticleID) {
                    look_ruby.currentArticleID = element.postID;
                    look_ruby_update_url(element.postURL, element.postTitle);
                }

                return false;
            }
            return true;
        });
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * update URL of post
     * @param url
     */
    function look_ruby_update_url(url, title) {

        if (window.location.href !== url) {
            if (url !== '') {
                history.replaceState(null, null, url);
                document.title = title;
            }
            //update ga
            look_ruby_update_ga(url);

        }
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * update ga
     * @param url
     */
    function look_ruby_update_ga(url) {

        if (typeof _gaq !== 'undefined' && _gaq !== null) {
            _gaq.push(['_trackPageview', url]);
        } else if (typeof ga !== 'undefined') {
            var reg = /.+?\:\/\/.+?(\/.+?)(?:#|\?|$)/, pathname = reg.exec(url)[1];
            ga('send', 'pageview', pathname);
        }
    }


    /*--------------------------------------------------------------
     VIDEO PLAYLIST
     --------------------------------------------------------------*/

    /**-------------------------------------------------------------------------------------------------------------------------
     * ajax iframe video
     */
    function look_ruby_video_playlist() {

        var video_iframe_nav = $('.video-playlist-iframe-nav-el .post-wrap');
        video_iframe_nav.off('click').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            var post_nav = $(this).parents('.video-playlist-iframe-nav-el');
            var post_id = post_nav.data('post_video_nav_id');
            var playlist = post_nav.parents('.video-playlist-wrap');
            var cache_id = 'video_playlist_' + post_id;

            //star animation
            look_ruby_video_playlist_animation_start(playlist);

            if (look_ruby_cache.exist(cache_id)) {
                var data = look_ruby_cache.get(cache_id);
                look_ruby_video_playlist_process(playlist, data)
            } else {
                //ajax request
                $.ajax({
                    type: 'POST',
                    url: look_ruby_ajax_url,
                    data: {
                        action: 'look_ruby_playlist_video',
                        post_id: post_id
                    },

                    success: function (data) {
                        //parse data
                        data = $.parseJSON(data);
                        //set cache
                        look_ruby_cache.set(cache_id, data);
                        look_ruby_video_playlist_process(playlist, data)
                    }
                });
            }
            return false;
        })
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * start video playlist animation
     * @param playlist
     */
    function look_ruby_video_playlist_animation_start(playlist) {

        var playlist_iframe = playlist.find('.video-playlist-iframe');
        var iframe_outer = playlist.find('.video-playlist-iframe-el');
        var iframe_height = playlist_iframe.height();

        playlist_iframe.css('height', iframe_height);
        playlist_iframe.prepend('<div class="video-loader"></div>');
        iframe_outer.empty();
    }

    /**-------------------------------------------------------------------------------------------------------------------------
     * append video iframe
     * @param playlist
     * @param data
     */
    function look_ruby_video_playlist_process(playlist, data) {

        var playlist_iframe = playlist.find('.video-playlist-iframe');

        //append html
        var iframe_outer = playlist.find('.video-playlist-iframe-el');
        iframe_outer.html(data);

        var iframe = iframe_outer.find('iframe');
        if (iframe.length > 0 && 'undefined' != iframe[0]) {
            var src = iframe[0].src;
            if (src.indexOf('?') > -1) {
                iframe[0].src += "&autoplay=1";
            } else {
                iframe[0].src += "?autoplay=1";
            }
        }

        //remove loader
        setTimeout(function () {
            playlist_iframe.find('.video-loader').fadeTo(500, .05, function () {
                $(this).remove();
            });
            playlist_iframe.css('height', 'auto');
        }, 100)
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * enable auto play
     */
    function look_ruby_iframe_playlist_autoplay() {
        var auto_play = $('.video-playlist-autoplay');
        if (auto_play.length > 0) {
            auto_play.each(function () {
                var auto_play_el = $(this);
                var check_auto_play = new Waypoint({
                    element: auto_play_el,
                    handler: function () {
                        var iframe = auto_play_el.find('iframe');
                        if (iframe.length > 0 && 'undefined' != iframe[0]) {
                            var src = iframe[0].src;
                            if (src.indexOf('?') > -1) {
                                iframe[0].src += "&autoplay=1";
                            } else {
                                iframe[0].src += "?autoplay=1";
                            }
                        }
                        //destroy waypoint
                        auto_play_el.removeClass('video-playlist-autoplay');
                        this.destroy();
                    },
                    offset: '80%'
                });
            })
        }
    }


    /**-------------------------------------------------------------------------------------------------------------------------
     * body click on
     */
    function look_ruby_body_click() {
        if (look_ruby.body.hasClass('is-site-link')) {
            if (look_ruby_site_bg_link != undefined) {
                look_ruby.body.on('click', function (e) {
                    if (e.target != this) {
                        return;
                    }
                    window.open(look_ruby_site_bg_link, '_blank');
                });
            }
        }
    }


    /* blog ajax load */
    function look_ruby_blog_loadmore() {

        $('.blog-loadmore-link').off('click').on('click', function (e) {

            e.preventDefault();
            e.stopPropagation();

            var link = $(this);
            var blog_id = '#ruby-blog-listing';
            var blog = link.parents('.blog-inner').find(blog_id);
            var animation = link.next('.ajax-animation');

            if (true == look_ruby.ajax['blog_ajax_processing']) {
                return;
            }

            look_ruby.ajax['blog_ajax_processing'] = true;

            link.animate({opacity: 0}, 200);
            var param = look_ruby.ajax_blog_data(blog);

            setTimeout(function () {
                animation.css({'display': 'block'});
                animation.css({'visibility': 'visible'});
                animation.animate({opacity: 1}, 200);
            }, 100);

            setTimeout(function () {
                look_ruby_loadmore_process(blog, param);
            }, 200);
        });
    }

    /* load more pagination */
    function look_ruby_loadmore_process(blog, param) {
        var page_current = param.blog_page_current;
        var page_next = ++page_current;
        var pagination_wrap = blog.parent('.blog-inner').find('.blog-pagination');

        //set next page
        param.blog_page_next = page_next;

        //ajax request
        if (page_next <= param.blog_page_max) {

            $.ajax({
                type: 'POST',
                url: look_ruby_ajax_url,
                data: {
                    action: 'look_ruby_pagination_data',
                    data: param
                },

                success: function (data) {
                    data = $.parseJSON(data);
                    if ('undefined' != data.blog_page_current) {
                        blog.data('blog_page_current', data.blog_page_current);
                    }

                    blog.append(data.content);

                    look_ruby.ajax['blog_ajax_processing'] = false;

                    setTimeout(function () {
                        look_ruby_reinitiate_function();
                    }, 50);

                    if (data.blog_page_current < param.blog_page_max) {
                        var animation = pagination_wrap.find('.ajax-animation');
                        animation.css({'display': 'none'});
                        animation.css({'visibility': 'hidden'});
                        animation.css({'opacity': 0});
                        pagination_wrap.find('.blog-loadmore-link').delay(100).animate({opacity: 1}, 200);

                    } else {
                        pagination_wrap.remove();
                    }
                }
            });
        }
    }

    // blog infinite scrolling
    function look_ruby_blog_infinite() {
        var infinite_scroll = $('.pagination-infinite-scroll');
        var animation = infinite_scroll.find('.ajax-animation');
        var blog = infinite_scroll.parent('.blog-inner').find('#ruby-blog-listing');
        if (infinite_scroll.length > 0) {
            look_ruby.waypoint_item['infinite_scroll'] = new Waypoint({

                element: infinite_scroll,
                handler: function (direction) {
                    if ('down' == direction) {

                        var param = look_ruby.ajax_blog_data(blog);

                        if (param.blog_page_current >= param.blog_page_max) {
                            infinite_scroll.remove();
                            return;
                        }

                        if (true == look_ruby.ajax['blog_ajax_processing']) {
                            return;
                        }

                        look_ruby.ajax['blog_ajax_processing'] = true;
                        setTimeout(function () {
                            animation.css({'display': 'block'});
                            animation.css({'visibility': 'visible'});
                            animation.animate({opacity: 1}, 200);
                        }, 100);

                        setTimeout(function () {
                            look_ruby_loadmore_process(blog, param);
                            look_ruby.waypoint_item['infinite_scroll'].destroy();
                        }, 150);
                    }
                },
                offset: '99%'
            })
        }
    }
    $(document).ready(function(){
        $('.bg-instagram').find('a[title="Instagram"]').attr('href', 'https://www.instagram.com/psibufet/');
    });

})(jQuery);
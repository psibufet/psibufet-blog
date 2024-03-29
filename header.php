<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-56FMXQ3');</script>
    <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56FMXQ3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 
<?php wp_body_open(); ?>
<?php get_template_part( 'templates/header/module', 'off_canvas' ); ?>
<?php
	if(is_single()){
		if(has_tag('nowi-wlasciciele')){
			echo '<div class="single-banner-data" data-image-url="' . get_field('ad_banner_wlasciciele', 'option')['url'] . '" data-image-alt="' . get_field('ad_banner_wlasciciele', 'option')['alt'] . '" data-url="' . get_field('ad_link_wlasciciele', 'option') . '"></div>';
		}else{
			echo '<div class="single-banner-data" data-image-url="' . get_field('ad_banner', 'option')['url'] . '" data-image-alt="' . get_field('ad_banner', 'option')['alt'] . '" data-url="' . get_field('ad_link', 'option') . '"></div>';
		}
	}
	if(is_single()){
		if(has_tag('nowi-wlasciciele')){
			echo '<div class="full-banner-data" data-image-url="' . get_field('ad_banner_full_wlasciciele', 'option')['url'] . '" data-image-alt="' . get_field('ad_banner_full_wlasciciele', 'option')['alt'] . '" data-url="' . get_field('ad_link_full_wlasciciele', 'option') . '"></div>';
		}else{
			echo '<div class="full-banner-data" data-image-url="' . get_field('ad_banner_full', 'option')['url'] . '" data-image-alt="' . get_field('ad_banner_full', 'option')['alt'] . '" data-url="' . get_field('ad_link_full', 'option') . '"></div>';
		}
	}
	if(is_single()){
		echo '<div class="single-psibufet-data" data-logo-url="' . get_field('psibufet_ad_logo', 'option')['url'] . '" data-logo-alt="' . get_field('psibufet_ad_logo', 'option')['alt'] . '" data-url="' . get_field('psibufet_ad_link', 'option') . '" data-title="' . get_field('psibufet_ad_title', 'option') . '">';
		while(have_rows('psibufet_ad_usp', 'option')){
			the_row();
			echo '<span data-icon-url="' . get_sub_field('psibufet_ad_usp_icon')['url'] . '" data-icon-alt="' . get_sub_field('psibufet_ad_usp_icon')['alt'] . '" data-text="' . get_sub_field('psibufet_ad_usp_text') . '"></span>';
		} 
		echo '</div>';
	}
?>
<div class="promobar__clone"></div>
<a href="https://psibufet.pl/?code=2blog20&utm_source=blog&utm_medium=display&utm_campaign=004_belka&utm_term=004_belka" class="promobar">
	<div class="promobar__wrap container">
		<h2><span class="value">-20%</span> Mamy dla Ciebie rabat na psie jedzenie <span class="link">Odbierz</span></h2>
	</div>
</a>
<div class="main-site-outer">
	<?php get_template_part( 'templates/section', 'header' ); ?>
	<div class="main-site-wrap">
		<div class="main-site-mask"></div>
		<div id="ruby-site-content" class="main-site-content-wrap clearfix">
			
<div class="header-nav-wrap clearfix">
	<div class="header-nav-inner">
		<div class="ruby-container">
			<div class="header-nav-holder clearfix">
				<?php get_template_part( 'templates/header/module', 'nav_search_icon' ); ?>
				<div class="mobileSearch">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/search_ico.svg'; ?>" />
				</div>
				<nav id="navigation" class="main-nav-wrap" <?php look_ruby_schema::markup( 'navigation', true ); ?>>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'look_ruby_main_navigation',
							'menu_id'        => 'main-navigation',
							'container'      => '',
							'menu_class'     => 'main-nav-inner',
							'walker'         => new look_ruby_Walker,
							'depth'          => '3',
							'echo'           => true,
							'fallback_cb'    => 'look_ruby_navigation_fallback'
						)
					); ?>
				</nav>
				<?php get_template_part( 'templates/header/module', 'logo_mobile' ); ?>
				<div class="mobileMenu">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/menu_ico.svg'; ?>" />
					<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/menu_close_ico.svg'; ?>" class="close" />
				</div>
				<?php // get_template_part( 'templates/header/module', 'off_canvas_btn' ); ?>
				<?php get_template_part( 'templates/header/module', 'mobile_menu' ); ?>
			</div>
		</div>
	</div>
</div>

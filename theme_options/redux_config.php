<?php
/**
 * redux configs
 */
if ( ! class_exists( 'Redux' ) ) {
	return false;
}

$look_ruby_template_directory = get_template_directory();

if ( ! function_exists( 'look_ruby_register_theme_options_style' ) ) {
	function look_ruby_register_theme_options_style() {
		wp_register_style( 'look-theme-options', get_template_directory_uri() . '/assets/css/theme-options.css', array( 'redux-admin-css' ), LOOK_THEME_VERSION, 'all' );
		wp_enqueue_style( 'look-theme-options' );
	}

	if ( is_admin() ) {
		add_action( 'redux/page/look_ruby_theme_options/enqueue', 'look_ruby_register_theme_options_style' );
	}
};

require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_general.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_header.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_navigation.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_sidebar.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_footer.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_blog.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_design.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_mic.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_social.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_typography.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_typography_body.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_typography_post.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_typography_nav.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_typography_header.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_color.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_single.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_category.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_page.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_woocommerce.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/panel_amp.php';
require_once $look_ruby_template_directory . '/theme_options/option_panels/table-contents.php';


$look_ruby_theme    = wp_get_theme();
$look_ruby_opt_name = 'look_ruby_theme_options';

$look_ruby_args = array(
	'opt_name'             => $look_ruby_opt_name,
	'display_name'         => $look_ruby_theme->get( 'Name' ),
	'display_version'      => $look_ruby_theme->get( 'Version' ),
	'menu_type'            => 'menu',
	'allow_sub_menu'       => true,
	'menu_title'           => esc_html__( 'Look Options', 'look' ),
	'page_title'           => esc_html__( 'Look Options', 'look' ),
	'google_api_key'       => '',
	'google_update_weekly' => true,
	'async_typography'     => false,
	'admin_bar'            => true,
	'admin_bar_icon'       => 'dashicons-admin-generic',
	'admin_bar_priority'   => 50,
	'global_variable'      => $look_ruby_opt_name,
	'dev_mode'             => false,
	'update_notice'        => false,
	'customizer'           => true,
	'page_priority'        => 54,
	'page_parent'          => 'themes.php',
	'page_permissions'     => 'manage_options',
	'menu_icon'            => '',
	'last_tab'             => '',
	'page_icon'            => 'icon-themes',
	'page_slug'            => '',
	'save_defaults'        => true,
	'default_show'         => false,
	'default_mark'         => '',
	'show_import_export'   => true,
	'transient_time'       => 60 * MINUTE_IN_SECONDS,
	'use_cdn'              => true,
	'output'               => true,
	'output_tag'           => true,
	'disable_tracking'     => true,
	'database'             => '',
	'system_info'          => false,
	'show_options_object'  => false,
);

Redux::setArgs( $look_ruby_opt_name, $look_ruby_args );

Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_general() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_block_styling() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_header() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_navigation() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_sidebar() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_footer() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_blog() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_single() );
Redux::setSection( $look_ruby_opt_name, look_register_options_table_contents() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_category() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_page() );
Redux::setSection( $look_ruby_opt_name, look_ruby_default_page_config() );
Redux::setSection( $look_ruby_opt_name, look_ruby_author_page_config() );
Redux::setSection( $look_ruby_opt_name, look_ruby_search_page_config() );
Redux::setSection( $look_ruby_opt_name, look_ruby_archive_page_config() );
Redux::setSection( $look_ruby_opt_name, look_ruby_author_team_page_config() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_social() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_share_post() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_site_social() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_typography() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_typography_body() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_typography_post() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_typography_nav() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_typography_block_header() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_color() );
if ( class_exists( 'Woocommerce' ) ) {
	Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_woocommerce() );
}
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_amp() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_custom_script() );
Redux::setSection( $look_ruby_opt_name, look_ruby_theme_options_import_export() );

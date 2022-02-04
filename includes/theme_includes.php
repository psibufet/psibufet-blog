<?php

##################################################
###                                            ###
###       THEME CONFIGS & INITIALIZE           ###
###                                            ###
##################################################

$look_ruby_template_directory = get_template_directory();

require_once $look_ruby_template_directory . '/includes/core/theme_config.php';
require_once $look_ruby_template_directory . '/includes/admin/admin_plugins.php';
require_once $look_ruby_template_directory . '/theme_options/redux_default.php';
require_once $look_ruby_template_directory . '/theme_options/redux_config.php';
require_once $look_ruby_template_directory . '/metaboxes/metabox_config.php';
require_once $look_ruby_template_directory . '/metaboxes/taxonomy_config.php';
require_once $look_ruby_template_directory . '/includes/admin/admin_enqueue.php';
require_once $look_ruby_template_directory . '/includes/admin/tinymce/tinymce_action.php';
require_once $look_ruby_template_directory . '/includes/core/enqueue.php';
require_once $look_ruby_template_directory . '/includes/admin/editor.php';


##################################################
###                                            ###
###              THEME CORE FILES              ###
###                                            ###
##################################################

require_once $look_ruby_template_directory . '/includes/menu/backend_mega_menu.php';
require_once $look_ruby_template_directory . '/includes/menu/frontend_mega_menu.php';

require_once $look_ruby_template_directory . '/includes/core/composer.php';
require_once $look_ruby_template_directory . '/includes/core/core.php';
require_once $look_ruby_template_directory . '/includes/core/core_query.php';
require_once $look_ruby_template_directory . '/includes/core/core_single.php';
require_once $look_ruby_template_directory . '/includes/table_contents.php';
if ( class_exists( 'Woocommerce' ) ) {
	require_once $look_ruby_template_directory . '/includes/core/core_woo.php';
}

require_once $look_ruby_template_directory . '/includes/core/core_video.php';
require_once $look_ruby_template_directory . '/includes/core/schema.php';
require_once $look_ruby_template_directory . '/includes/core/ad_support.php';

//including theme function
require_once $look_ruby_template_directory . '/includes/core/post_format.php';
require_once $look_ruby_template_directory . '/includes/core/post_views.php';
require_once $look_ruby_template_directory . '/includes/core/post_review.php';
require_once $look_ruby_template_directory . '/includes/core/dynamic_css.php';
require_once $look_ruby_template_directory . '/includes/core/action.php';
require_once $look_ruby_template_directory . '/includes/core/post_related.php';


##################################################
###                                            ###
###              SOCIALS & SHARES              ###
###                                            ###
##################################################
require_once $look_ruby_template_directory . '/includes/socials/social_data.php';

##################################################
###                                            ###
###             SIDEBAR * WIDGETS              ###
###                                            ###
##################################################

//including sidebar sections
require_once $look_ruby_template_directory . '/includes/sidebar/sidebar_section.php';


##################################################
###                                            ###
###              TEMPLATE PARTS                ###
###                                            ###
##################################################

//include category info
require_once $look_ruby_template_directory . '/templates/meta/el-cat_info.php';
require_once $look_ruby_template_directory . '/templates/meta/el-category.php';

//include all template
require_once $look_ruby_template_directory . '/templates/template_wrapper.php';
require_once $look_ruby_template_directory . '/templates/template_part.php';
require_once $look_ruby_template_directory . '/templates/template_single.php';
require_once $look_ruby_template_directory . '/templates/template_page.php';
require_once $look_ruby_template_directory . '/templates/template_thumbnail.php';
require_once $look_ruby_template_directory . '/templates/template_composer_loop.php';
require_once $look_ruby_template_directory . '/templates/template_feat.php';
require_once $look_ruby_template_directory . '/templates/template_blog.php';

require_once $look_ruby_template_directory . '/templates/block/block.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_code.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_ad_box.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_slider_fw.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_slider_fw_2.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_slider_hw.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_carousel.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_grid.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_video.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_1.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_2.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_3.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_4.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_5.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_carousel_1.php';
require_once $look_ruby_template_directory . '/templates/block/fw_subscribe.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_code.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_ad_box.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_1.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_2.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_3.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_4.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_5.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_6.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_7.php';
require_once $look_ruby_template_directory . '/templates/block/hs_block_8.php';
require_once $look_ruby_template_directory . '/templates/block/fw_block_grid_overlay.php';
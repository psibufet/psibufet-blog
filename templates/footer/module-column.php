<?php if ( is_active_sidebar( 'look_ruby_sidebar_footer_1' ) || is_active_sidebar( 'look_ruby_sidebar_footer_2' ) || is_active_sidebar( 'look_ruby_sidebar_footer_3' )) : ?>
	<div class="column-footer-wrap">
		<div class="ruby-container row">
			<div class="column-footer-inner">
				<div class="sidebar-footer sidebar-wrap col-sm-4 col-xs-12" role="complementary">
					<?php if ( is_active_sidebar( 'look_ruby_sidebar_footer_1' ) ) {
						dynamic_sidebar( 'look_ruby_sidebar_footer_1' );
					} ?>
				</div>
				<div class="sidebar-footer sidebar-wrap col-sm-4 col-xs-12" role="complementary">
					<?php if ( is_active_sidebar( 'look_ruby_sidebar_footer_2' ) ) {
						dynamic_sidebar( 'look_ruby_sidebar_footer_2' );
					} ?>
				</div>
				<div class="sidebar-footer sidebar-wrap col-sm-4 col-xs-12" role="complementary">
					<?php if ( is_active_sidebar( 'look_ruby_sidebar_footer_3' ) ) {
						dynamic_sidebar( 'look_ruby_sidebar_footer_3' );
					} ?>
				</div>
			</div>
		</div>
	</div>
<?php endif;
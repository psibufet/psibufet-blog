<div class="menuMobile">
    <div class="menuMobile__wrap">
        <div class="menuMobile__search">
            <?php echo get_search_form(); ?>
        </div>
        <div class="menuMobile__menu">
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
        </div>
    </div>
</div>
<?php
/**
 *
 * Theme padrão desenvolvimento LayerUP WebPack
 *
 * @link https://layerup.com.br/
 *
 * @package layerup_theme
 *
 */
?>

<nav id="main-nav" class="navbar navbar-expand-lg">

    <!-- Logo  -->
    <div id="logo">
        <?php if (has_custom_logo() && function_exists('custom_logo')) { the_custom_logo(); } else { ?>
            <a class="layerup-logo-link"  href="<?php echo get_site_url(); ?>" rel="home" itemprop="url">
                <img class="layerup-logo" src="<?php bloginfo('template_directory'); ?>/assets/img/Logo.png" width="186" height="45" alt="Logo da Layerup" />
            </a>
        <?php } ?>
    </div>

    <!-- Main menu  -->
    <?php
        wp_nav_menu( array(
            'theme_location'	=> 'principal',
            'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
            'container'			=> 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'		=> 'menu-layer-fixed',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
            'walker'			=> new WP_Bootstrap_Navwalker()
        ) );
    ?>

</nav>

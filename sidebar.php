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

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

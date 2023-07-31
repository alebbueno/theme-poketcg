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

<form action="<?php echo home_url( '/' ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
    <div class="search-wp-class">
        <input type="search" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="PESQUISE AQUI..."/>
        <input type="submit" class="d-none" id="searchsubmit" value="" />
    </div>
</form>
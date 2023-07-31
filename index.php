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

get_header();
?>
<section class="container-fluid section-banner-header">
    <div class="container banner-header-center">
        <h1>
            <svg class="star-1" width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.0006 30.3941L15.0281 37L14.143 29.3841L7.77042 33.8363L10.1266 26.5264L2.45504 28.0563L7.64468 22.3169L0 20.6591L7.12462 17.4823L0.830148 12.9238L8.65917 12.8592L4.80265 6.18878L11.9822 9.24731L11.229 1.61711L16.5175 7.26924L19.0006 0L21.4825 7.26924L26.771 1.61711L26.019 9.24731L33.1974 6.18878L29.3408 12.8592L37.1699 12.9238L30.8754 17.4823L38 20.6591L30.3565 22.3169L35.545 28.0563L27.8734 26.5264L30.2296 33.8363L23.857 29.3841L22.9719 37L19.0006 30.3941Z" fill="#F0B242"/>
            </svg>
            <svg class="star-1" width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.0006 30.3941L15.0281 37L14.143 29.3841L7.77042 33.8363L10.1266 26.5264L2.45504 28.0563L7.64468 22.3169L0 20.6591L7.12462 17.4823L0.830148 12.9238L8.65917 12.8592L4.80265 6.18878L11.9822 9.24731L11.229 1.61711L16.5175 7.26924L19.0006 0L21.4825 7.26924L26.771 1.61711L26.019 9.24731L33.1974 6.18878L29.3408 12.8592L37.1699 12.9238L30.8754 17.4823L38 20.6591L30.3565 22.3169L35.545 28.0563L27.8734 26.5264L30.2296 33.8363L23.857 29.3841L22.9719 37L19.0006 30.3941Z" fill="#F0B242"/>
            </svg>
            O blog do <strong>maior <?=(wp_is_mobile())? '<br />' : ''; ?>software odontológico</strong><br />
            <svg class="arrow-1" width="169" height="30" viewBox="0 0 169 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M153.707 15.7072C154.098 15.3166 154.098 14.6835 153.707 14.2929L147.343 7.92898C146.953 7.53845 146.319 7.53845 145.929 7.92898C145.538 8.3195 145.538 8.95266 145.929 9.34319L151.586 15L145.929 20.6569C145.538 21.0474 145.538 21.6806 145.929 22.0711C146.319 22.4616 146.953 22.4616 147.343 22.0711L153.707 15.7072ZM17.9999 16L153 16L153 14L17.9999 14L17.9999 16Z" fill="black"/>
                <rect x="1" y="1" width="167" height="28" rx="14" stroke="black" stroke-width="2"/>
            </svg>
            <strong> de gestão</strong> da <?=(wp_is_mobile())? '<br />' : ''; ?>América Latina<br />
        </h1>
        <div class="container-image">
            <?php if(wp_is_mobile()): ?>
                <img src="<?php echo get_bloginfo('template_url') . '/assets/img/imagem-mobile-banner.png'; ?>" alt="" class="image-efect">
            <?php else: ?>
                <img src="<?php echo get_bloginfo('template_url') . '/assets/img/img-01.png'; ?>" alt="" class="image-efect">
                <img src="<?php echo get_bloginfo('template_url') . '/assets/img/img-02.png'; ?>" alt="" class="image-efect efeito">
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="container section-busca">
    <div class="row">
        <div class="col-12 col-busca">
            <div class="row">
                <?php 
                    $categories = get_categories( array(
                        'orderby' => 'meta_value',
                        'meta_key' => 'categoria_meta_field', // Substitua pelo nome do campo personalizado correto
                        'order' => 'ASC',
                    ) ); 
                ?>
                <div class="col-12 col-md-7">
                    <div class="container-slide-category">
                        <?php 
                            $i = 1;
                            $linkItems = '';
                            $selectOptions = '';
                            
                            foreach ($categories as $category) {
                                if(wp_is_mobile()){
                                    if ($category->slug !== 'uncategorized') {
                                        $selectOptions .= '<option value="' . $category->slug . '">' . $category->name . '</option>';
                                    }
                                }else{
                                    if ($i <= 2) {
                                        if ($category->slug !== 'uncategorized') {
                                            $linkItems .= '<a class="item-category-slide" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                                        }
                                    } else {
                                        if ($category->slug !== 'uncategorized') {
                                            $selectOptions .= '<option value="' . $category->slug . '">' . $category->name . '</option>';
                                        }
                                    }
                                }
                                $i++;
                            }
                            
                            echo $linkItems;
                            
                            if (!empty($selectOptions)) {
                                echo '<select name="category" id="category-change">';
                                if(wp_is_mobile()){
                                    echo '<option value="">Categorias</option>';

                                }else{
                                    echo '<option value="">Outras</option>';
                                };
                                echo $selectOptions;
                                echo '</select>';
                            }
                        ?>
                        <button class="action-search">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.9192 12.8386C5.40344 12.8386 3.88769 12.2636 2.7378 11.1007C0.424965 8.80092 0.424965 5.03766 2.7378 2.73789C3.86155 1.61414 5.33811 1 6.9192 1C8.50029 1 9.98991 1.61414 11.1006 2.73789C12.2243 3.86164 12.8385 5.3382 12.8385 6.91929C12.8385 8.50038 12.2243 9.99001 11.1006 11.1007C9.97685 12.2114 8.43496 12.8386 6.9192 12.8386ZM6.9192 1.65334C5.50798 1.65334 4.18822 2.20215 3.19514 3.19523C1.14364 5.24673 1.14364 8.59185 3.19514 10.6434C5.24664 12.6948 8.59176 12.6948 10.6433 10.6434C11.6363 9.65027 12.1852 8.33051 12.1852 6.91929C12.1852 5.50807 11.6363 4.18832 10.6433 3.19523C9.65018 2.20215 8.33042 1.65334 6.9192 1.65334Z" fill="#2196F3" stroke="#2196F3"/>
                                <path d="M16.0007 18C16.0007 18 15.9615 18 15.9354 18C15.2821 17.9869 14.6418 17.6733 14.1844 17.1637L9.53264 11.95C9.41504 11.8193 9.42811 11.6103 9.55877 11.4927C9.68944 11.3751 9.89851 11.3881 10.0161 11.5188L14.6679 16.7325C15.0077 17.1114 15.4781 17.3466 15.9615 17.3597C16.3405 17.3597 16.7064 17.229 16.9677 16.9807C17.229 16.7194 17.3597 16.3666 17.3466 15.9746C17.3336 15.5042 17.1114 15.0338 16.7194 14.694L11.5057 10.0422C11.3751 9.92464 11.362 9.71557 11.4796 9.5849C11.5972 9.45423 11.8063 9.44116 11.9369 9.55876L17.1506 14.2106C17.6602 14.6679 17.9738 15.3082 17.9869 15.9615C18 16.5365 17.804 17.0591 17.412 17.4512C17.02 17.8432 16.5365 18.0261 15.9877 18.0261L16.0007 18Z" fill="#2196F3" stroke="#2196F3"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-5 mobile-popup">
                    <button class="close-search">
                        <svg width="40px" height="48px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM15.36 14.3C15.65 14.59 15.65 15.07 15.36 15.36C15.21 15.51 15.02 15.58 14.83 15.58C14.64 15.58 14.45 15.51 14.3 15.36L12 13.06L9.7 15.36C9.55 15.51 9.36 15.58 9.17 15.58C8.98 15.58 8.79 15.51 8.64 15.36C8.35 15.07 8.35 14.59 8.64 14.3L10.94 12L8.64 9.7C8.35 9.41 8.35 8.93 8.64 8.64C8.93 8.35 9.41 8.35 9.7 8.64L12 10.94L14.3 8.64C14.59 8.35 15.07 8.35 15.36 8.64C15.65 8.93 15.65 9.41 15.36 9.7L13.06 12L15.36 14.3Z" fill="#2196F3"/>
                        </svg>
                    </button>
                    <?php  echo get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container section-maispopular">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 titulo-section-slide">
            <div>
                <h2>Os <svg width="36" height="26" viewBox="0 0 36 26" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="34" height="23.1163" rx="11.5581" stroke="#F0B242" stroke-width="2"/><path d="M18.4186 5.86047V19.2558" stroke="#F0B242" stroke-width="2" stroke-linecap="round"/><path d="M25.1163 12.5581L11.7209 12.5581" stroke="#F0B242" stroke-width="2" stroke-linecap="round"/></svg> <strong>populares</strong></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1 alnbtn most-popular-arrow">
            <button class="btnslide arrowleft">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2929 19.2929C12.9024 19.6834 12.9024 20.3166 13.2929 20.7071L19.6569 27.0711C20.0474 27.4616 20.6805 27.4616 21.0711 27.0711C21.4616 26.6805 21.4616 26.0474 21.0711 25.6569L15.4142 20L21.0711 14.3431C21.4616 13.9526 21.4616 13.3195 21.0711 12.9289C20.6805 12.5384 20.0474 12.5384 19.6569 12.9289L13.2929 19.2929ZM26 19L14 19L14 21L26 21L26 19Z" fill="black"/>
                    <path d="M1.00001 20C1.00001 9.50659 9.5066 0.999997 20 0.999998C30.4934 0.999999 39 9.50659 39 20C39 30.4934 30.4934 39 20 39C9.5066 39 1.00001 30.4934 1.00001 20Z" stroke="black" stroke-width="2"/>
                </svg>
            </button>
        </div>
        <div class="col-12 col-md-10 container-slide-popular">
            <?php 
                $popular_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                ));
                if ($popular_posts->have_posts()) {
                    while ($popular_posts->have_posts()) {
                        $popular_posts->the_post();
            ?>
                <div class="inner-slide" onclick="window.location.href='<?php the_permalink(); ?>'">
                    <div class="slide-img" style="background: url(<?php the_post_thumbnail_url(''); ?>) center center no-repeat;">
                    </div>
                    <div class="slide-text">
                        <?php the_category(); ?>
                        <h1><?php the_title(); ?></h1>
                        <p><?=get_excerpt(120, get_the_content());?></p>
                        <button class="btn-leia-orange" onclick="window.location.href='<?php the_permalink(); ?>'">Ler mais</button>
                    </div>
                </div>
            <?php 
                    }
                }
            ?>
        </div>
        <div class="col-1  alnbtn most-popular-arrow">
            <button class="btnslide arrowright">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.7071 20.7071C27.0976 20.3166 27.0976 19.6834 26.7071 19.2929L20.3431 12.9289C19.9526 12.5384 19.3195 12.5384 18.9289 12.9289C18.5384 13.3195 18.5384 13.9526 18.9289 14.3431L24.5858 20L18.9289 25.6569C18.5384 26.0474 18.5384 26.6805 18.9289 27.0711C19.3195 27.4616 19.9526 27.4616 20.3431 27.0711L26.7071 20.7071ZM14 21L26 21L26 19L14 19L14 21Z" fill="black"/>
                    <path d="M39 20C39 30.4934 30.4934 39 20 39C9.50658 39 0.999995 30.4934 0.999997 20C0.999998 9.50659 9.50659 1 20 1C30.4934 1.00001 39 9.5066 39 20Z" stroke="black" stroke-width="2"/>
                </svg>
            </button>
        </div>
    </div>
</section>
<section class="container-fluid section-posts">
    <div class="container post-container">
        <div id="home-load" class="row">
            <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 4, 
                    'orderby'        => 'date', 
                    'order'          => 'DESC'
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
            ?>
            <div class="col-12 col-md-6 post-item">
                <div class="style-inner" onclick="window.location.href='<?php the_permalink(); ?>'">
                    <img class="img-fluid" src="<?php the_post_thumbnail_url( 'blog-list' ); ?>" alt="<?php the_title(); ?>">
                    <div class="inner-text">
                        <?php the_category(); ?>
                        <?php the_title( '<h1>', '</h1>' ); ?>
                        <p><?=get_excerpt(222, get_the_content());?></p>
                        <button class="read-more-fake">Ler mais</button>
                    </div>
                </div>
            </div>
            <?php 
                    }
                } else {
                    echo 'Nenhuma postagem encontrada.';
                }
                wp_reset_postdata();
            ?>
        </div>
        <?php if ( $query->max_num_pages > 1 ) { ?>
        <div class="row justify-content-center mt-3">
            <button id="loadmore" data-page="1">Ver mais conteúdos</button>
        </div>
        <?php } ?>
    </div>
</section>
<section class="container-fluid section-materiais">
    <div class="container">
        <div class="row">
            <div class="col-12 div-section">
                <div class="titulo-section-slide-mat">
                    <?php if(!wp_is_mobile()): ?>
                        <img src="<?php echo get_bloginfo('template_url') . '/assets/img/componente-separacao.png'; ?>">
                    <?php else: ?>
                        <img src="<?php echo get_bloginfo('template_url') . '/assets/img/componente-separacao-menor.png'; ?>">
                    <?php endif; ?>
                    <h3>Materiais <strong>incríveis</strong></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1 alnbtn most-popular-arrow">
                <button class="btnslide buttonprevmat">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2929 19.2929C12.9024 19.6834 12.9024 20.3166 13.2929 20.7071L19.6569 27.0711C20.0474 27.4616 20.6805 27.4616 21.0711 27.0711C21.4616 26.6805 21.4616 26.0474 21.0711 25.6569L15.4142 20L21.0711 14.3431C21.4616 13.9526 21.4616 13.3195 21.0711 12.9289C20.6805 12.5384 20.0474 12.5384 19.6569 12.9289L13.2929 19.2929ZM26 19L14 19L14 21L26 21L26 19Z" fill="white"/>
                        <path d="M1.00001 20C1.00001 9.50659 9.5066 0.999997 20 0.999998C30.4934 0.999999 39 9.50659 39 20C39 30.4934 30.4934 39 20 39C9.5066 39 1.00001 30.4934 1.00001 20Z" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
            </div>
            <div class="col-12 col-md-9 div-slide-material">
                <?php 
                $args = array(
                    'post_type' => 'material_rico',
                    'posts_per_page' => -1 
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) { $query->the_post();
                        $link_material = get_post_meta( get_the_ID(), '_link_material', true );
                        $tipo_material = get_post_meta( get_the_ID(), '_tipo_material', true );
                ?>
                    <div class="container-intem-slide">
                        <a href="<?=esc_url( $link_material );?>" class="itemslide-mat" target="_blank" rel="noopener noreferrer">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                            <span class="tipo-mat"><?=esc_html( $tipo_material );?></span>
                            <h2><?php the_title();?></h2>
                            <p><?php the_content(); ?></p>
                            <span class="btn-acessar">Acessar</span>
                        </a>
                    </div>
                <?php 
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
            <div class="col-1 alnbtn most-popular-arrow">
                <button class="btnslide buttonnextmat">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.7071 20.7071C27.0976 20.3166 27.0976 19.6834 26.7071 19.2929L20.3431 12.9289C19.9526 12.5384 19.3195 12.5384 18.9289 12.9289C18.5384 13.3195 18.5384 13.9526 18.9289 14.3431L24.5858 20L18.9289 25.6569C18.5384 26.0474 18.5384 26.6805 18.9289 27.0711C19.3195 27.4616 19.9526 27.4616 20.3431 27.0711L26.7071 20.7071ZM14 21L26 21L26 19L14 19L14 21Z" fill="white"/>
                        <path d="M39 20C39 30.4934 30.4934 39 20 39C9.50658 39 0.999995 30.4934 0.999997 20C0.999998 9.50659 9.50659 1 20 1C30.4934 1.00001 39 9.5066 39 20Z" stroke="white" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid section-adeuspapelada">
    <div class="container">
        <div class="row">
            <?php $url_test_soft = "https://app.simplesdental.com/simples/cadastro"; ?>
            <div class="col-12 div-adeuspapelada" onclick="window.open('<?=$url_test_soft;?>', '_blank')">
                <div class="imagem-ass-01">
                    <img  class="efeito" src="<?php echo get_bloginfo('template_url') . '/assets/img/elemento-assinatura-1.png'; ?>" alt="">
                </div>
                <div class="imagem-ass-02">
                    <img src="<?php echo get_bloginfo('template_url') . '/assets/img/elemento-assinatura-new.png'; ?>" alt="">
                    <img class="efeito" src="<?php echo get_bloginfo('template_url') . '/assets/img/elemento-assinatura-2.png'; ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row section-nasredes">
            <div class="col-12">
                <div class="div-nasredes">
                    <img src="<?php echo get_bloginfo('template_url') . '/assets/img/componente-section.png'; ?>" alt="">
                    <h3>Simples Dental <?=(wp_is_mobile())? '<br />' : ''; ?><svg width="80" height="30" viewBox="0 0 80 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M62.7071 15.7072C63.0976 15.3166 63.0976 14.6835 62.7071 14.2929L56.3431 7.92897C55.9526 7.53845 55.3194 7.53845 54.9289 7.92897C54.5384 8.31949 54.5384 8.95266 54.9289 9.34318L60.5858 15L54.9289 20.6569C54.5384 21.0474 54.5384 21.6806 54.9289 22.0711C55.3194 22.4616 55.9526 22.4616 56.3431 22.0711L62.7071 15.7072ZM18 16L62 16L62 14L18 14L18 16Z" fill="#F0B242"/><rect x="1" y="1" width="78" height="28" rx="14" stroke="#F0B242" stroke-width="2"/></svg><strong> nas redes</strong></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid footer-instagram p-0">
    <?php
        $access_token = "IGQVJYd1MzcVk5ZAVM0YXlKQ1d6dDZADM2drZAXUtUm42RjZAmZAVNyNVpYc2pXSF80dVhKTTg4X2ZAlLV92RUlJT0prbzdEbmpZAR25HdF9QYm5qTlR6VTF2aUVXTGVjZAG9nZAjkzRkM3UGJn";
        $user_id = "6155038471232483";
        $count = 6; // número de fotos a serem exibidas
        $json_link = "https://graph.instagram.com/{$user_id}/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink&access_token={$access_token}&count={$count}";

        $json = file_get_contents($json_link);
        $obj = json_decode($json, true);
        
        $contter = 0;
        foreach ($obj['data'] as $post) {
            if ($counter >= $count) {
                break; 
            }
            if ($post['media_type'] !== 'VIDEO' && $post['media_type'] !== 'CAROUSEL_ALBUM') {
                //var_dump($post);
                $image_url = $post['media_url'];
                $thumbnail_url = $image_url . '&w=250&h=250';
                $link = $post['permalink'];
                echo '<a href="' . $link . '" target="_blank"><span style="background: url(' . $thumbnail_url . ') center center no-repeat;"></span></a>';
                $counter++;
            }
        }
        ?>
</section>
<section class="container-fluid section-linksocial">
    <div class="container">
        <div class="row">
            <div class="col-12 div-sociallink">
                <ul>
                    <li><a href="https://www.facebook.com/simplesdental/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_bloginfo('template_url') . '/assets/img/facebook.png'; ?>"></a></li>
                    <li><a href="https://www.instagram.com/simplesdental/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_bloginfo('template_url') . '/assets/img/instagram.png'; ?>"></a></li>
                    <li><a href="https://www.linkedin.com/company/simples-dental/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_bloginfo('template_url') . '/assets/img/linkedin.png'; ?>"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCyI9WDzbJj8g8rSlBFY5qCg" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_bloginfo('template_url') . '/assets/img/youtube.png'; ?>"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
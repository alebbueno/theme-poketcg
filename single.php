<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section id="titulo-single" class="container-fluid">
   <div class="container alinha-header">
      <div class="row justify-content-center">
         <div class="col-12 col-md-8 text-banner-single">
            <?php the_category(); ?>
            <h1><?php the_title(); ?></h1>
            <h4><?php echo get_the_date( 'F j, Y'); ?></h4>
         </div>
      </div>
   </div>
</section>
<section class="conteudo-post container">
   <div class="row justify-content-center bg-fundo-row">
      <div class="col-12 col-md-10 content-post">
         <?php the_post_thumbnail('', array('class' => 'img-fluid post-thumbnail-contain')); ?>
         <?php the_content(); ?>
         <p class="compartilhe">
            Compartilhe:
            <a href="https://www.facebook.com/sharer.php?=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
               <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="21" cy="21" r="21" fill="black"/>
                  <path d="M21 7C13.24 7 7 13.2759 7 21.0805C7 28.0805 12.12 33.954 18.84 35V25.1034H15.32V21.0805H18.84V17.9425C18.84 14.4023 20.92 12.4713 24.12 12.4713C25.64 12.4713 27.24 12.7126 27.24 12.7126V16.2529H25.48C23.72 16.2529 23.24 17.2989 23.24 18.4253V21.0805H27.08L26.44 25.1034H23.16V34.9195C29.88 33.8736 35 28.0805 35 21.0805C35 13.2759 28.68 7 21 7Z" fill="#FAFAFA"/>
               </svg>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
               <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="21" cy="21" r="21" fill="black"/>
                  <path d="M31.5875 9.79999H11.059C10.3306 9.79999 9.80078 10.381 9.80078 11.0265V30.9735C9.80078 31.6836 10.3968 32.2 11.059 32.2H31.5213C32.2498 32.2 32.7795 31.619 32.7795 30.9735V11.0265C32.8458 10.381 32.2498 9.79999 31.5875 9.79999ZM17.0189 20.7741V29.2951H13.1781V21.4196V18.5792H17.0189V20.7741ZM15.0985 16.9654C14.0389 16.9654 13.1781 16.1262 13.1781 15.0934C13.1781 14.0605 14.0389 13.2213 15.0985 13.2213C16.158 13.2213 17.0189 14.0605 17.0189 15.0934C17.0189 16.1262 16.158 16.9654 15.0985 16.9654ZM29.6671 23.4207V29.2951H26.3561V24.0663C26.3561 22.8398 26.2236 21.2259 24.4357 21.2259C22.6477 21.2259 22.3828 22.5815 22.3828 24.0017V29.2951H19.2042V20.6449V18.5792H22.2504V19.9994H22.3166C22.7801 19.1602 23.9059 18.5792 25.5614 18.5792C28.3427 18.5792 29.336 19.8703 29.6009 21.8715C29.6671 22.3233 29.6671 22.8398 29.6671 23.4207Z" fill="#FAFAFA"/>
               </svg>
            </a>
            <a href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
               <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="21" cy="21" r="21" fill="black"/>
                  <path d="M25.1088 12.0005C25.4225 12.0005 25.7366 12.0005 26.0503 12.0005C26.0715 12.0096 26.0923 12.0252 26.1139 12.0279C27.2842 12.1621 28.2884 12.6274 29.1275 13.4338C29.177 13.4814 29.2983 13.4892 29.377 13.4731C30.3421 13.2776 31.2557 12.947 32.1156 12.4776C32.1717 12.4469 32.2335 12.4254 32.3297 12.3842C31.9472 13.4938 31.2538 14.3166 30.3025 14.9568C31.2274 14.8767 32.0972 14.6129 33 14.2617C32.408 15.1052 31.7666 15.8237 30.9756 16.3975C30.6567 16.6287 30.4586 16.8586 30.5572 17.2584C30.5765 17.3376 30.5609 17.4251 30.5591 17.5089C30.4963 20.1497 29.7298 22.5859 28.2757 24.8151C25.1569 29.594 19.8439 31.586 14.4012 30.8519C12.7895 30.6348 11.2655 30.1293 9.83346 29.3751C9.55092 29.2263 9.27782 29.061 9 28.903C12.4871 29.218 15.2177 27.7183 16.1549 26.8702C15.1087 26.8222 14.1753 26.5057 13.3545 25.9013C12.5371 25.2986 11.9574 24.5289 11.639 23.6052C12.0098 23.6052 12.3607 23.6194 12.7102 23.6011C13.0508 23.5832 13.3899 23.532 13.7295 23.4953C11.0551 22.7929 9.81035 20.4831 9.90138 18.7315C10.2433 18.8574 10.5778 19.0076 10.9282 19.1015C11.2796 19.1959 11.6475 19.2339 12.0079 19.2966C12.0112 19.276 12.0145 19.2554 12.0178 19.2348C9.50328 17.4489 9.56177 14.4641 10.6065 12.9067C13.2739 15.9459 16.6431 17.6284 20.7543 17.8935C20.7255 17.5524 20.6896 17.2501 20.676 16.9474C20.5859 14.9216 21.8981 13.0079 23.8669 12.3178C24.2678 12.1772 24.6942 12.1044 25.1088 12V12.0005Z" fill="#FAFAFA"/>
               </svg>
            </a>
         <p>
      </div>
   </div>
</section>
<?php 
   $tags = wp_get_post_tags($post->ID); 
   if ($tags):
   $first_tag = $tags[0]->term_id;
?>
<section class="container-fluid conteudos-relacionados">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-md-10">
            <h1>
               <svg class="sol" width="59" height="57" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.0006 30.3941L15.0281 37L14.143 29.3841L7.77042 33.8363L10.1266 26.5264L2.45504 28.0563L7.64468 22.3169L0 20.6591L7.12462 17.4823L0.830148 12.9238L8.65917 12.8592L4.80265 6.18878L11.9822 9.24731L11.229 1.61711L16.5175 7.26924L19.0006 0L21.4825 7.26924L26.771 1.61711L26.019 9.24731L33.1974 6.18878L29.3408 12.8592L37.1699 12.9238L30.8754 17.4823L38 20.6591L30.3565 22.3169L35.545 28.0563L27.8734 26.5264L30.2296 33.8363L23.857 29.3841L22.9719 37L19.0006 30.3941Z" fill="#F0B242"/>
               </svg>
               Conteúdos<br />
               <svg class="arrow-single" width="321" height="43" viewBox="0 0 321 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M291.316 22.2072C291.707 21.8166 291.707 21.1835 291.316 20.793L284.952 14.429C284.562 14.0385 283.929 14.0385 283.538 14.429C283.147 14.8195 283.147 15.4527 283.538 15.8432L289.195 21.5001L283.538 27.1569C283.147 27.5474 283.147 28.1806 283.538 28.5711C283.929 28.9617 284.562 28.9617 284.952 28.5711L291.316 22.2072ZM34.189 22.5L290.609 22.5001L290.609 20.5001L34.189 20.5L34.189 22.5Z" fill="black"/>
                  <rect x="1" y="1" width="319" height="41" rx="20.5" stroke="black" stroke-width="2"/>
               </svg>
               <strong>relacionados</strong>
            </h1>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-12 col-md-10 return-related-post mt-4">
            <div class="row">
               <?php
                  $args = array(
                     'posts_per_page' => 3, 
                     'tag__in' => array($first_tag),
                     'post__not_in' => array($post->ID),
                     'caller_get_posts'=>1
                  );
                  $query = new WP_Query( $args );
                  if ( $query->have_posts() ) {
                     while ( $query->have_posts() ) {
                           $query->the_post();
               ?>
               <div class="col-12 col-md-4 post-item">
                  <div class="style-inner" onclick="window.location.href='<?php the_permalink(); ?>'">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url( 'single-related' ); ?>" alt="<?php the_title(); ?>">
                     <div class="inner-text inner-singlrelated">
                           <?php the_category(); ?>
                           <h1><?=get_excerpt(45, get_the_title());?></h1>
                           <p><?=get_excerpt(80, get_the_content());?></p>
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
            <div class="row justify-content-center mt-3">
               <button id="loadmore">Ver mais conteúdos</button>
            </div>
         </div>
      </div>
      <div class="row mb-5 section-adeuspapelada single-page">
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
   </div>
</section>
<?php 
   endif;
?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
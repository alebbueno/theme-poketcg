<div class="col-12 col-md-4">

        <div class="post_contents">

            <a href="<?php the_permalink(); ?>">
                <div class="thumb-post" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">                
                    <h2><?php the_title() ?></h2>       
                </div>
            </a>
            <a href="<?php the_permalink(); ?>">
            <div class="descricao-post">                  
                <div class="category"><?php echo strip_tags (get_the_term_list( $post->ID, 'category')); ?></div>
                <p><?php echo get_excerpt(120);?></p>                
                <a class="bt-link-post" href="<?php the_permalink(); ?>">Ler agora</a>
            </div>
            </a>
        </div>
    
</div>
<?php get_header(); ?>

<section class="container section-404 pb-5">
  <div class="row">
    <div class="col-10 col-md-6 m-auto aln-page-404 text-center">
      <h1>404</h1>
      <h2>Ops! Parece que algo deu errado!</h2>
      <p class="my-4">A página que você procura não existe ou está em manutenção!</p>
    
      <a class="btn-azul" href="<?php echo get_site_url(); ?>">voltar para home</a>
    </div>

    <div class="col-12 col-md-6  aln-page-404">
      <img src="<?php echo get_bloginfo('template_url') . '/assets/img/404.png'; ?>">
    </div>
  </div>
</section>

<?php get_footer('404'); ?>
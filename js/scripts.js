jQuery(function($) {
    $('.container-slide-popular').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        mobileFirst: true,
        nextArrow: $('.arrowright'),
        prevArrow: $('.arrowleft'),
        responsive: [
            {
              breakpoint: 1024,
              settings: {

              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
              }
            }
        ]
    });
    $('.div-slide-material').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
        dots: false,
        nextArrow: $('.buttonnextmat'),
        prevArrow: $('.buttonprevmat'),
        responsive: [
            {
              breakpoint: 1024,
              settings: {

              }
            },
            {
              breakpoint: 480,
              settings: {
                dots: true,
              }
            }
        ]
    });

    $('.footer-instagram').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        responsive: [
            {
              breakpoint: 1024,
              settings: {

              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                dots: true,
              }
            }
        ]
    });

    var loadMore = (slug, id, page, find) => {
        $.ajax({
                url: wp.ajaxurl,
                type: 'GET',
                data: {
                    action: 'load_more',
                    page: page,
                    slug: slug,
                    search: find,
                },
                beforeSend: function() {
                    console.log('Carregando posts');
                }
            })
            .done(function(resp) {
                $(id).append(resp);
            })
    }

    //Load mora index
    $('#loadmore').on('click', function(){
        var btnThis = $(this);
        var pageBtn = btnThis.data('page');
        var newPage = pageBtn + 1;
        btnThis.text('Carregando...');
        loadMore('', '#home-load', newPage, '');
        btnThis.text('Ver mais conteúdos');
        btnThis.data('page', newPage);
    })
    //Load more category
    $('#loadmorecat').on('click', function(){
        var btnThis = $(this);
        var pageBtn = btnThis.data('page');
        var catPage = btnThis.data('cat');
        var newPage = pageBtn + 1;
        btnThis.text('Carregando...');

        loadMore(catPage, '#load-cat', newPage, '');
        btnThis.text('Ver mais conteúdos');
        btnThis.data('page', newPage);
    })
    //Load mora Search
    $('#loadmoresearch').on('click', function(){
        var btnThis = $(this);
        var pageBtn = btnThis.data('page');
        var catSearch = btnThis.data('search');
        var newPage = pageBtn + 1;
        btnThis.text('Carregando...');
        loadMore('', '#load-search', newPage, catSearch);
        btnThis.text('Ver mais conteúdos');
        btnThis.data('page', newPage);

    })

    $('#category-change').on('change', function() {
      var categorySlug = $(this).val();
      var homeLink = 'https://projetoslayerup.com.br/simplesdental';
      if (categorySlug) {
        window.location.href = homeLink + '/categoria/' + categorySlug;
      }
    });

    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > 88) {
          $('header').addClass('active');
      } else {
          $('header').removeClass('active');
      }
    });

    $('.action-search').on('click', function(){
      $('.mobile-popup').addClass('active');
    })

    $('.close-search').on('click', function(){
      $('.mobile-popup').removeClass('active');
    })
});
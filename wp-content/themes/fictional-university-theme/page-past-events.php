<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri() ?>/images/ocean.jpg)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">
      Past Events
    </h1>
    <div class="page-banner__intro">
      <p>
        See our amazing events realized
      </p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php 

    // Obtém a data atual no formato Ymd
    $today = date('Ymd');
    // Query personalizada para eventos futuros ordenados pela data
    $past_events = new WP_Query(array(
      'paged' => get_query_var('paged', 1),
      'posts_per_page' => 1,
      'post_type' => 'event',
      'meta_key' => '_meu_prefixo_data',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' => '_meu_prefixo_data',
          'compare' => '<=',
          'value' => $today,
          'type' => 'DATE'
        )
      )
    ));

    while ($past_events->have_posts()) {
      $past_events->the_post(); 
      // Recupera a data do evento
      $data_evento = get_post_meta(get_the_ID(), '_meu_prefixo_data', true);
      // Converte a data para o formato "d/m/Y"
      $data_formatada = date('d/m/Y', strtotime($data_evento));
  ?>
      
      <div class="event-summary">
        <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">          
          <span class="event-summary__month"><?php echo date('M', strtotime($data_evento)); ?></span>
          <span class="event-summary__day"><?php echo date('d', strtotime($data_evento)); ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h5>
          <p>
            <?php echo wp_trim_words(get_the_content(), 18); ?>
            <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
          </p>
        </div>
      </div> 

  <?php } // End while ?>

  <?php echo paginate_links(array(
    'total' => $past_events->max_num_pages
  )); ?>

  <hr class="section-break">

  <div> 

    <p> 
      <a 
        class="btn btn--blue"
        href="<?= site_url(); ?>/events" 
        title="Future Events"
        > 
        See our Future Events
      </a>
    </p>
      
  </div>

</div>

<?php get_footer(); ?>

<?php 

get_header();

$parent_id = wp_get_post_parent_id();

$testArray = get_pages(array(
  'child_of' => get_the_ID(),
));

while (have_posts()) {
	the_post(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri() ?>/images/ocean.jpg)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?= the_title() ?></h1>
    </div>
  </div>

  <div class="container container--narrow page-section">
    
    <?php if ($parent_id): ?>      
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a 
            class="metabox__blog-home-link" 
            href="<?= get_permalink($parent_id) ?>"
            >
            <i class="fa fa-home" aria-hidden="true"></i> 
            Back to <?= get_the_title( $parent_id ) ?> 
          </a> 
          <span class="metabox__main"><?= the_title() ?></span>
        </p>
      </div>      
    <?php endif ?>

    
    <?php if ($parent_id or $testArray): ?>
      <div class="page-links">
        <h2 class="page-links__title">
          <a href="<?= get_permalink($parent_id) ?>">
            <?= get_the_title( $parent_id ) ?> 
          </a> 
        </h2>

        <ul class="min-list">
          <?php 
            if ($parent_id) {
              $findChildrenOf = $parent_id;
            }
            else {
              $findChildrenOf = get_the_ID();            
            }
            wp_list_pages(array(
              'title_li' => null,
              'child_of' => $findChildrenOf,
              'sort_colum' => 'menu_order',
            )); 
          ?>
        </ul>
      </div>      
    <?php endif ?>
	  

    <div class="generic-content"><?= the_content() ?></div>
  </div>


<?php
}      	

get_footer();

?>

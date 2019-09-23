<?php get_header(); ?>

<div class="single-post">
  <?php
  while( have_posts() ):
    the_post();
    get_template_part( 'template-parts/content', 'single' );
    ?>

    <div class="single-pagination-container">

      <div class="pag-left">
        <?php next_post_link ('&laquo; %link'); ?>
      </div>

      <div class="pag-right">
        <?php previous_post_link ('%link &raquo');; ?>
      </div>
  </div>
    <?php
  endwhile;
  ?>

</div>



<?php get_footer(); ?>

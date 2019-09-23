<article <?php post_class(); ?>>
  <?php echo get_post_format(); ?>
  <?php the_post_thumbnail( array( 350, 500 ) ); ?>
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <p>Posted in <?php echo get_the_date(); ?></p>
  <p><?php the_tags('Tags: ',', '); ?></p>
  <p><?php the_content(); ?></p>
</article>

<article <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <p>Posted in <a href="<?php the_permalink(); ?>"> <?php echo get_the_date(); ?></p></a>
  <p><?php the_content(); ?></p>
</article>

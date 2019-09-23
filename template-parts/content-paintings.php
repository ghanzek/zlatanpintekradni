<article <?php post_class( array( 'class' => 'paintings')); ?>>
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 350, 500 ) ); ?></a>
    <a href="<?php the_permalink(); ?>"><h3 class="h3title"><?php the_title(); ?></h3></a>
  <div class="single-dimensions-painting">  <?php the_excerpt(); ?></div>
</article>

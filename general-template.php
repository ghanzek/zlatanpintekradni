<?php

/*
Template Name: General Template
*/

 ?>


<?php get_header(); ?>

<div class="content-area">
  <main>

    <section class="middle-area">

        <div class="general-template">
          <?php

            if(have_posts()):
              while(have_posts()): the_post();
           ?>
            <article class="post-basic">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </article>
            
           <?php
              endwhile;
            else:
            ?>
              <p>There are no posts</p>
          <?php endif; ?>
        </div>

    </section>

  </main>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="content-area">
  <main>
    <section class="middle-area">
      <div class="row-middle">
        <aside class="sidebar"><?php get_sidebar( 'home' ); ?></aside>
        <div class="news">
          <?php

            if(have_posts()):
              while(have_posts()): the_post();
              get_template_part( 'template-parts/content', get_post_format() );
              endwhile;
              ?>

              <div class="index-pagination-container">

                <div class="pag-left">
                  <?php previous_posts_link ("<< Newer posts") ?>
                </div>

                <div class="pag-right">
                  <?php next_posts_link ("Older posts >>") ?>
                </div>

              </div>


              <?php
            else:
            ?>
              <p>There are no posts</p>
          <?php endif; ?>
        </div>
      </div>

    </section>
  </main>
</div>

<?php get_footer(); ?>

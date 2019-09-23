<?php /* Template Name: CustomPageT2 */ ?>


<?php get_header(); ?>

<div class="content-area">
  <main>
    <section class="middle-area">
      <div class="row-middle">
          <div class="paintings-all">
            <?php
            $exhibitions = new WP_Query( 'post_type=post&posts_per_page=10&cat=3');

            if( $exhibitions->have_posts() ):
              while( $exhibitions->have_posts() ): $exhibitions->the_post();
              ?>

              <div class="paintings-loop">
                <?php get_template_part( 'template-parts/content', 'paintings'); ?>
              </div>


              <?php
            endwhile;
            wp_reset_postdata();
          endif;
             ?>
          </div>

      </div>

    </section>
  </main>
</div>

<?php get_footer(); ?>

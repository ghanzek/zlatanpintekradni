<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zlatan Pinteks</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
     <div id="page-wrap">
    <header>
        <div class="menu-area">
            <div class="logo">
              <?php the_custom_logo(); ?>
            </div>
            <div class="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu')); ?>
          </div>
          <div class="mobile-menu">
            <img src="http://localhost/wp/wp-content/uploads/2019/09/hamburger.png" alt="">
          </div>


          </div>




    </header>

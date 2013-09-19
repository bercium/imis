<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
get_header(); ?>

<div class="vs vs-default <?php the_field('slika-v-glavi'); ?>" ></div>


 <div class="row">
      <div class="sidebar-one sidebar">
          <div class="text-wrap">
              <!-- REPLACE  wp-php here on: -->
              <img src="<?php bloginfo('template_directory'); ?>/img/secondary-logo.png" title="IMIS"  />
                  <?php  // left sidebar / secondary menu menu ?>
                  <ul class="clearfix">
                   
                  </ul>
          <!-- wp-php end  -->
          </div>
      </div>


      <div class="main-content">
          <div class="text-wrap">
              <h1><?php et("Željena stran ni bila najdena!"); ?></h1>
          </div>
      </div>
   
   <?php //* ?>
      <div class="sidebar-two sidebar">
        <div class="img-box" ></div>
        <div class="text-wrap">

          <!-- REPLACE wp-php here on: -->
            <?php 
            // right side sidebar
            dynamic_sidebar();
            //get_sidebar(); ?>

          <!-- wp-php end  -->
          </div>
      </div><?php //*/ ?>
  </div>


<?php get_footer(); ?>


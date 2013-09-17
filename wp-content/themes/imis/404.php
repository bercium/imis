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
              <details>
      <summary><h1>Napaka 404</h1></summary>
      <p><span frown>:(</span></p>
    </details>
          </div>
      </div>
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
      </div>            
  </div>


<?php get_footer(); ?>


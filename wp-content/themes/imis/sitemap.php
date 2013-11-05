<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: Sitemap
  */  

get_header(); ?>
<div class="vs vs-default <?php the_field('slika-v-glavi'); ?>" ></div>


 <div class="row <?php if ( !if_is_dynamic_sidebar() ) echo "no-sidebar"; ?>">
      <div class="sidebar-one sidebar">
          <div class="text-wrap">
              <!-- REPLACE  wp-php here on: -->
              <img src="<?php bloginfo('template_directory'); ?>/img/secondary-logo.png" title="IMIS"  />
                  <?php  // left sidebar / secondary menu menu ?>
                  <ul class="clearfix">
                    <?php //wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
                  </ul>
          <!-- wp-php end  -->
          </div>
      </div>


      <div class="main-content">
          <div class="text-wrap">            
            
    <header>
      <h1><?php et("Mapa strani"); ?></h1>

    </header>            

          <ul class="clearfix">
             <?php wp_list_pages( array('title_li'=>'','depth'=>2) ); ?>
          </ul>
              
          </div>
      </div>
   <?php if ( if_is_dynamic_sidebar() ){ ?>
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
      </div><?php } ?>
  </div>


<?php get_footer(); ?>
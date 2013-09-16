<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: Sitemap
  */  

get_header(); ?>
<div class="">
<div class="row" ><img src="<?php bloginfo('template_directory'); ?>/img/brisime.jpg"></div>


 <div class="row">
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
            

          <ul class="clearfix">
             <?php wp_list_pages( array('title_li'=>'','depth'=>2) ); ?>
          </ul>
              
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

</div>

<?php get_footer(); ?>
<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: PageList
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
                    <?php echo str_replace("current_page_parent","",
                                 str_replace("current_page_ancestor", "", 
                                   wp_list_pages( array('title_li'=>'','echo'=>0,'include'=>get_post_top_ancestor_id()) )
                                 )
                               ); ?>
                    <?php wp_list_pages( array('title_li'=>'','depth'=>1, 'child_of'=>get_post_top_ancestor_id()) ); ?>
                  </ul>
          <!-- wp-php end  -->
          </div>
      </div>


      <div class="main-content">
          <div class="text-wrap">
              <!-- REPLACE  wp-php here on: -->
              
              <?php wordpress_breadcrumbs(); ?>
              
  <article class="post" id="post-<?php the_ID(); ?>">
    <header>
      <h1><?php the_title(); ?></h1>

    </header>
  
      <ul class="clearfix">
         <?php $subPages = get_pages( array('child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order'=>'desc') ); 
         
          foreach ($subPages as $singlePage){
            ?>
          
            <li class="page-lists"><time datetime="<?php the_time('F j, Y'); ?>"><?php echo date("d.m.Y",strtotime($singlePage->post_date)); ?></time> <a href="<?php echo get_page_link($singlePage->ID); ?>"><?php echo $singlePage->post_title; ?></a></li><br />
          
          <?php } ?>
      </ul>
    
  </article>

  <?php //comments_template(); ?>
              <!-- wp-php end  -->
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
      </div>
   <?php } ?>
  </div>


<?php get_footer(); ?>

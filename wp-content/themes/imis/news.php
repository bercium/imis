<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: News
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
                    <?php /* echo str_replace("current_page_parent","",
                                 str_replace("current_page_ancestor", "", 
                                   wp_list_pages( array('title_li'=>'','echo'=>0,'include'=>get_post_top_ancestor_id()) )
                                 )
                               ); */?>
                    <?php //wp_list_pages( array('title_li'=>'','depth'=>1, 'child_of'=>get_post_top_ancestor_id()) ); ?>
                  </ul>
          <!-- wp-php end  -->
          </div>
      </div>


      <div class="main-content">         
              <?php if ($post->post_parent){ 
                
                wordpress_breadcrumbs(0); ?>
          <div class="text-wrap">
              <!-- REPLACE  wp-php here on: -->
             
              
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <header>
      <h1><?php the_title(); ?></h1>

    </header>
    
    <?php the_content('<p class="serif">'.t('Preberi preostanek strani').' &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>'.t('Strani').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
  </article>
  <?php endwhile; endif; ?>
              
  <?php }else{
    ?>
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
    <?php
  }//comments_template(); ?>
              <!-- wp-php end  -->
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

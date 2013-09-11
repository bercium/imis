<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: Vstopna
  */  

get_header(); ?>




<div class="row" ><img src="<?php bloginfo('template_directory'); ?>/img/brisime.jpg"></div>

 <div class="row">
      <div class="sidebar-one sidebar one-third">
          <div class="text-wrap">
              <!-- REPLACE  wp-php here on: -->
              <h2>Kaj delamo?</h2>
              <img src="<?php bloginfo('template_directory'); ?>/img/secondary-logo.png" title="IMIS"  />
  <p><b>To je statični html v vstopna.php fajlu</b> Razvoj programskega produkta IMiS® 
za skeniranje, arhiviranje, pregledovanje, razvrščanje in iskanje dokumentov, 
ter povezovanje z aplikacijami.</p>

 
                  <?php  // left sidebar / secondary menu menu ?>
                  <ul class="clearfix">
                    <?php wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
                  </ul>
          <!-- wp-php end  -->
          </div>
      </div>


      <div class="main-content one-third">
          <div class="text-wrap">
              <!-- REPLACE  wp-php here on: -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <header>
      <h2><?php the_title(); ?></h2>

    </header>
  
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
  </article>
  <?php endwhile; endif; ?>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

  <?php comments_template(); ?>
              <!-- wp-php end  -->
          </div>
      </div>
      <div class="sidebar-two sidebar one-third">
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

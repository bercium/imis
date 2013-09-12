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

 <div class="row content-wrapper">
      
              <!-- REPLACE  wp-php here on: -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
  
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
  </article>
  <?php endwhile; endif; ?>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

  <?php// comments_template(); ?>
              <!-- wp-php end  -->
          </div>
      </div>
                 
  </div>  
  

<?php get_footer(); ?>

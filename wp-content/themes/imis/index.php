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

              <div class="home-sidebar one-third">
                    <div class="text-wrap">
                       <?php the_field('levi_stolpec'); ?>
                    </div>
              </div>

              <div class="home-main-content one-third">
                    <div class="text-wrap">
                      to je INDEX.PHP
                      
                           <!-- REPLACE  wp-php here on: -->
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article class="post" id="post-<?php the_ID(); ?>">
              
                <?php the_content('<p class="serif">'.t('Preberi preostanek strani').' &raquo;</p>'); ?>

                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
              
              </article>
              <?php endwhile; endif; ?>
              <?php //edit_post_link(t('Uredi to stran').'.', '<p>', '</p>'); ?>

              <?php// comments_template(); ?>
                          <!-- wp-php end  -->
                    </div>
              </div>

              <div class="home-sidebar one-third">
                  <div class="text-wrap">
                    <!-- REPLACE wp-php here on: -->
                     <?php the_field('desni_stolpec'); ?>
                    <!-- wp-php end  -->
                    </div>
              </div>

          </div>
      </div>
                 
  </div>  
  

<?php get_footer(); ?>

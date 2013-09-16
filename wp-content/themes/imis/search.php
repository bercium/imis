<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
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
                    <?php // wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
                  </ul>
          <!-- wp-php end  -->
          </div>
      </div>


      <div class="main-content">
          <div class="text-wrap">            
            


            <?php if (have_posts()) : ?>
              <header>
                <h2>Najdeni rezultati:</h2>
              </header>

              <nav>
                <div><?php next_posts_link('&laquo; Older Entries') ?></div>
                <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
              </nav>

              <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class() ?>>
                  <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                  <?php /* ?>
                  <footer>
                    <?php the_tags('Tags: ', ', ', '<br />'); ?> 
                    Posted in <?php the_category(', ') ?>
                    | <?php edit_post_link('Edit', '', ' | '); ?>
                    <?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                  </footer> <?php */ ?>
                </article>

              <?php endwhile; ?>

              <nav>
                <div><?php next_posts_link('&laquo; Older Entries') ?></div>
                <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
              </nav>

            <?php else : ?>
            <header>
              <h2>Nothing found. Try a different search?</h2>
              </header>
              <?php //get_search_form(); ?>

            <?php endif; ?>
              
              
              
              
              
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
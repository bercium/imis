<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: Vstopna
  */  

get_header(); ?>


<div id="featured" class="inside">
        <ul class="ui-tabs-nav">  
          <li class="ui-tabs-nav-item ui-tabs-selected fit1" id="nav-fragment-1"><a href="#fragment-1">Industrijska<span>gradnja</span></a></li>  
          <li class="ui-tabs-nav-item fit2" id="nav-fragment-2"><a href="#fragment-2">Visoke<span>gradnje</span></a></li>  
          <li class="ui-tabs-nav-item fit3" id="nav-fragment-3"><a href="#fragment-3">Nizke<span>gradnje</span></a></li>  
          <li class="ui-tabs-nav-item fit4" id="nav-fragment-4"><a href="#fragment-4" class="padfix">Inženiring</a></li>  
        </ul>   
        
        <!-- First Content -->  
        <div id="fragment-1" class="ui-tabs-panel" style="">  
            <section>
            <div class="podrocja">
                <?php $page_id = 125; $queried_page = get_page($page_id); ?>
                <h2><?php echo $queried_page->post_title; ?></h2>
                <?php echo apply_filters('the_content', $queried_page->post_content); ?>
            </div>
            
            <div class="metas">
                <?php $image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page_id ), 'single-post-thumbnail' ); ?>
                <img class="f_img" src="<?php echo $image[0];?>" >
                <a href="#" class="button">Mnenja strank</a>
                <a href="#" class="button">Reference</a>
            </div>            
            
          </section>  
        </div>  
        
        <!-- Second Content -->  
        <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">  
          <section>
            <div class="podrocja">          
                <?php
                $page_id = 129;               $queried_page = get_page($page_id);?>
                <h2><?php echo $queried_page->post_title; ?></h2>
                <?php echo apply_filters('the_content', $queried_page->post_content); ?>
            </div>  
              
            <div class="metas">
                <?php $image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page_id ), 'single-post-thumbnail' ); ?>
                <img class="f_img" src="<?php echo $image[0];?>" >
                <a href="#" class="button">Mnenja strank</a>
                <a href="#" class="button">Reference</a>
            </div>            
                      
          </section>  
        </div>  
        
        <!-- Third Content -->  
        <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">  
          <section>
            <div class="podrocja">
                <?php           $page_id = 131;           $queried_page = get_page($page_id);?>
                <h2><?php echo $queried_page->post_title; ?></h2>           
                <?php echo apply_filters('the_content', $queried_page->post_content); ?>
            </div>
            
            <div class="metas">
                <?php $image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page_id ), 'single-post-thumbnail' ); ?>
                <img class="f_img" src="<?php echo $image[0];?>" >
                <a href="#" class="button">Mnenja strank</a>
                <a href="#" class="button">Reference</a>
            </div>    
          </section>  
        </div>  
        
        <!-- Fourth Content -->  
        <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">  
          <section>
            <div class="podrocja">
            <?php
            $page_id = 133;
            $queried_page = get_page($page_id);
            ?>
            <h2><?php echo $queried_page->post_title; ?></h2>
            <?php echo apply_filters('the_content', $queried_page->post_content); ?>  
            </div>
            
            <div class="metas">
                <?php $image = wp_get_attachment_image_src ( get_post_thumbnail_id ( $page_id ), 'single-post-thumbnail' ); ?>
                <img class="f_img" src="<?php echo $image[0];?>" >
                <a href="#" class="button">Mnenja strank</a>
                <a href="#" class="button">Reference</a>
            </div>            
            
          </section>    
        </div>  
      </div>


    <!-- end of #featured -->

         <div class="row content-wrapper">

              <div class="home-sidebar one-third">
                    <div class="text-wrap">
                       <?php the_field('levi_stolpec'); ?>
                    </div>
              </div>

              <div class="home-main-content one-third">
                    <div class="text-wrap">
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

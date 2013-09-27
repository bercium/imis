<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: Vstopna
  */  

get_header(); ?>


<div id="featured" class="inside container loading" >
      <ul id="controls" class="ui-tabs-nav flex-control-nav flex-control-thumbs">  
          <li class="ui-tabs-nav-item" id="nav-fragment-1"><a href="#fragment-1"><span><div class="thumbnail-slika thumbnail-slika-1"></div><?php the_field('thumbnail-tekst-1'); ?></span></a></li>  
          <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><span><div class="thumbnail-slika thumbnail-slika-2"></div><?php the_field('thumbnail-tekst-2'); ?></span></a></li>  
          <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><span><div class="thumbnail-slika thumbnail-slika-3"></div><?php the_field('thumbnail-tekst-3'); ?></span></a></li>  
         
      </ul> 
         
      <div class="flexslider" id="slider">  
        <ul class="slides"> 
          <li>
        <!-- First Content -->  
        <div id="fragment-1" class="ui-tabs-panel" style="">  
           
              <div class="slider-text-wrap">
                <?php the_field('besedilo-1'); ?>
              </div>
           
           <img src="<?php bloginfo('template_directory'); ?>/img/vs-vecja-preglednost.jpg" >

           
           
        </div>  
      </li>
      <li>
        
        <!-- Second Content -->  
        <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">  
         
            <div class="slider-text-wrap">
                <?php the_field('besedilo-2'); ?>
              </div>
           <img src="<?php bloginfo('template_directory'); ?>/img/vs-arhiviranje.jpg" >
                      
           
        </div>  
        </li>


        <!-- Third Content -->  
         <li>
        <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">  
         
            <div class="slider-text-wrap">
              <?php the_field('besedilo-3'); ?>
              </div>
             <img src="<?php bloginfo('template_directory'); ?>/img/vs-akreditiran.jpg" >
           
        </div> 
        </li>

    </ul>
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
              
                <?php the_content(); ?>

                
              
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

<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
  /*
  Template Name: Slider
  */  

get_header(); ?>


<div id="featured" class="inside">
      <ul class="ui-tabs-nav">  
          <li class="ui-tabs-nav-item ui-tabs-selected fit1" id="nav-fragment-1"><a href="#fragment-1"><img src="<?php the_field('thumbnail-slika-1'); ?>"><span><?php the_field('thumbnail-tekst-1'); ?><span></a></li>  
          <li class="ui-tabs-nav-item fit2" id="nav-fragment-2"><a href="#fragment-2"><img src="<?php the_field('thumbnail-slika-2'); ?>"><span><?php the_field('thumbnail-tekst-2'); ?></a></span></li>  
          <li class="ui-tabs-nav-item fit3" id="nav-fragment-3"><a href="#fragment-3"><img src="<?php the_field('thumbnail-slika-3'); ?>"><span><?php the_field('thumbnail-tekst-2'); ?></a></span></li>  
         
        </ul> 
         
        
        <!-- First Content -->  
        <div id="fragment-1" class="ui-tabs-panel" style="">  
            <section>
              <div class="slider-text-wrap">
                <?php the_field('besedilo-1'); ?>
              </div>
           <img class="feat-img"  src="<?php the_field('slika-1'); ?>"> 
           
          </section>  
        </div>  
        
        <!-- Second Content -->  
        <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">  
          <section>
            <div class="slider-text-wrap">
                <?php the_field('besedilo-2'); ?>
              </div>
            <img class="feat-img" src="<?php the_field('slika-2'); ?>"> 
                      
          </section>  
        </div>  
        
        <!-- Third Content -->  
        <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">  
          <section>
            <div class="slider-text-wrap">
              <?php the_field('besedilo-3'); ?>
              </div>
             <img class="feat-img" src="<?php the_field('slika-3'); ?>"> 
          </section>  
        </div>  
        
     
        
      </div>


    <!-- end of #featured -->

       

<?php get_footer(); ?>

<!DOCTYPE html>
<!--[if  IE ]>      <html class="ie"> <![endif]-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/normalize.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/main.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/fonts.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/administrator.css") ?>
    
    <!-- Wordpress Templates require a style.css in theme root directory -->
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
    
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/modernizr-2.6.2.min.js") ?>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>        
        
    </head>
    <body  <?php body_class(); ?>>
      
<?php /* ?>    <body <?php body_class(); ?>> <?php */ ?>
      
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="container">
            <div class="header-wrap">
                <div class="row">
                    <header>
                        <!-- REPLACE wp-php here on: -->
                        <h1 class="main-logo" ><a href=" <?php echo home_url(); ?> ">Imaging systems</a></h1>                
                        <!-- end wp-php -->
                    </header>
                </div>

               <div class="row">
                <nav class="main-navigation clearfix">
                    <!-- REPLACE wp-php here on: -->
                    <ul>
                       <?php wp_list_pages('title_li=&depth=2' ); ?>

                        <li class="page_item page-item-11">
                          <a >Iskalnik</a>
                          <ul class="children">
                            <li class="page_item page-item-2">
                              <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ) ?>">
                                <div>
                                  <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
                                  <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                                </div>
                              </form>
                            </li>
                          </ul>
                        </li>
                     </ul>
                     <!-- wp-php end-->
                </nav>
               </div>
           </div><!-- header-wrap -->


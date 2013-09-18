<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<footer>
            <div class="row">
                <div class="widget-one">
                <div class="text-wrap left">
                    <!-- REPLACE wp-php here on: -->
                    <p>IMAGING SYSTEMS, informacijski sistemi d.o.o. | Telefon: 059 070 000 | E-mail: info@imis.si | Brnčičeva 41g, 1000 Ljubljana</p>
                    <!-- wp-php end  -->
                </div>
                </div>
            </div>
            <div class="row">
                <div class="footer">
                    <div class="left text-wrap  copyright"> <!-- REPLACE wp-php here on: --><p>Imaging Systems 2013 Pravice pridržave</p><!-- wp-php end  --></div>

                    <div class="right text-wrap">
                    <!-- REPLACE wp-php here on: -->
                    <ul class="mini-navigation">
                      
                      <?php 
                      /*$actual_link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                      preg_match(, $actual_link, $matches);*/
                      ?>
                        <li><a href="<?php _e("sitemap","imis-site"); ?>"><?php _e("Mapa strani","imis-site"); ?></a></li>
                        <li class="about"><a href=""><?php _e("O AVTORJIH","imis-site"); ?> </a>
                            <ul><li><a href="">EBerce</a><span><?php _e("PRILAGODITEV VSEBIN IN TEHNIČNA IZVEDBA","imis-site"); ?></span></li>
                                <li><a href="">Katja Žerko</a><span><?php _e("OBLIKOVANJE","imis-site"); ?></span></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- wp-php end  -->
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>  

        </footer>

        </div><!-- container -->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.10.0.min.js"><\/script>')</script>
      

      <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/plugins.js") ?>
      <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/main.js") ?>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
<?php wp_footer(); ?>
        
    </body>
</html>
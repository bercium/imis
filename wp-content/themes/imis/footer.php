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
                    <p><?php et("IMAGING SYSTEMS, informacijski sistemi d.o.o. | Telefon: 059 070 000 | E-mail: info@imis.si | Brnčičeva 41g, 1000 Ljubljana"); ?></p>
                    <!-- wp-php end  -->
                </div>
                </div>
            </div>
            <div class="row">
                <div class="footer">
                    <div class="left text-wrap  copyright"> <!-- REPLACE wp-php here on: --><p><?php et("Imaging Systems 2013 Pravice pridržane"); ?></p><!-- wp-php end  --></div>

                    <div class="right text-wrap">
                    <!-- REPLACE wp-php here on: -->
                    <ul class="mini-navigation">
                      
                        <li><a href="<?php if (getLang() == 'en') echo "sitemap"; else echo "mapastrani"; ?>"><?php et("Mapa strani"); ?></a></li>
                        <li class="about"><a href=""><?php et("O AVTORJIH"); ?> </a>
                            <ul><li><a href="">EBerce</a><span><?php et("PRILAGODITEV VSEBIN IN TEHNIČNA IZVEDBA"); ?></span></li>
                                <li><a href="">Katja Žerko</a><span><?php et("OBLIKOVANJE"); ?></span></li>
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
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" ></script>  
      

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

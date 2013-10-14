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
                    <p><?php et("IMAGING SYSTEMS, informacijski sistemi d.o.o. | Telefon: 059 070 000 | E-mail:"); echo ' <a href="mailto:info@imis.si" style="color:#FFF; text-decoration:none;">info@imis.si</a> '; et(" | Brnčičeva 41g, 1000 Ljubljana"); ?></p>
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
                        <li><a href="<?php if (getLang() == 'en') echo "/cookies"; else echo "/piskotki"; ?>"><?php et("Piškotki"); ?></a></li>
                        <li><a href="<?php if (getLang() == 'en') echo "/sitemap"; else echo "/mapastrani"; ?>"><?php et("Mapa strani"); ?></a></li>
                        <li class="about"><a href=""><?php et("O AVTORJIH"); ?> </a>
                            <ul><li><a href="http://www.eberce.si" target="_blank">eBerce</a><span><?php et("PRILAGODITEV VSEBIN IN TEHNIČNA IZVEDBA"); ?></span></li>
                                <li><a href="http://www.behance.net/zerko" target="_blank">Katja Žerko</a><span><?php et("OBLIKOVANJE"); ?></span></li>
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
        
        
      
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
      <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/jquery.flexslider.js") ?>        
      <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/main.js") ?>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        

        
        
  <script language="javascript" type="text/javascript" src="javascripts/cookie/jquery.cookie.js"></script>
  <script language="javascript" type="text/javascript" src="javascripts/cookie/jquery.cookiecuttr.<?php echo $lang; ?>.js"></script>
  
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/cookie/jquery.cookie.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/cookie/jquery.cookiecuttr.".getLang().".js") ?>

  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  <script type="text/javascript">
    var lang = '<?php echo $lang ?>';
    
    $(document).ready(function () {
      $.cookieCuttr({cookieDeclineButton:false, cookiePolicyLink:'<?php  if (getLang() == 'en') echo home_url_custom()."/cookies"; else echo home_url_custom()."/piskotki"; ?>'});
      
      var searchForm = $(".main-navigation .searchform input[type=text]");
      searchForm.val("<?php et("Išči..."); ?>");
      searchForm.click(function() {
            $(this).val('').unbind('click'); 
         });
    });

  /*if (jQuery.cookie('cc_cookie_accept') == "cc_cookie_accept") {
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-9773251-4']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  }*/
    
  </script>

    <?php wp_footer(); ?>
  
    </body>
</html>

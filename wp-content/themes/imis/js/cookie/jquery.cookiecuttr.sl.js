/**
 * Copyright (C) 2012 Chris Wharton (chris@weare2ndfloor.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT
 * HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR
 * FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE
 * OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS,
 * COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.COPYRIGHT HOLDERS WILL NOT
 * BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL
 * DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR DOCUMENTATION.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://gnu.org/licenses/>.
 
 Documentation available at http://cookiecuttr.com
 
 */
(function ($) {
    $.cookieCuttr = function (options) {
        var defaults = {
            cookieCutter: false, // you'd like to enable the div/section/span etc. hide feature? change this to true
            cookieCutterDeclineOnly: false, // you'd like the CookieCutter to only hide when someone has clicked declined set this to true
            cookieAnalytics: false, // just using a simple analytics package? change this to true
            cookieDeclineButton: true, // this will disable non essential cookies
            cookieAcceptButton: true, // this will disable non essential cookies
            cookieResetButton: false,
            cookieOverlayEnabled: false, // don't want a discreet toolbar? Fine, set this to true
            cookiePolicyLink: '#cookie_info', // if applicable, enter the link to your privacy policy here...
            cookieMessage: 'Spletno mesto uporablja piškotke (<a id="cookie_law_bullshit" href="{{cookiePolicyLink}}" title="več o piškotkih">več o piškotkih</a>) z namenom zagotavljanja spletne storitve, oglasnih sistemov in funkcionalnosti, ki jih brez piškotkov ne bi mogli nuditi. <br />Z obiskom in uporabo spletnega mesta soglašate s piškotki ',
            cookieAnalyticsMessage: 'We use cookies, just to track visits to our website, we store no personal details.',
            cookieErrorMessage: "We\'re sorry, this feature places cookies in your browser and has been disabled. <br>To continue using this functionality, please",
            cookieWhatAreTheyLink: "#cookie_info",
            cookieDisable: '',
            cookieExpires: 365,
            cookieAcceptButtonText: "V redu",
            cookieDeclineButtonText: "×",
            cookieResetButtonText: "PONASTAVI PIŠKOTKE",
            cookieWhatAreLinkText: "Kaj so piškotki?",
            cookieNotificationLocationBottom: false, // top or bottom - they are your only options, so true for bottom, false for top            
            cookiePolicyPage: false,
            cookiePolicyPageMessage: 'Please read the information below and then choose from the following options',
            cookieDiscreetLink: false,
            cookieDiscreetReset: false,
            cookieDiscreetLinkText: "Piškotki?",
            cookieDiscreetPosition: "topleft", //options: topleft, topright, bottomleft, bottomright         
            cookieNoMessage: false, // change to true hide message from all pages apart from your policy page
            cookieDomain: "",
            cookieOverlayText: "<h1>Pravilnik o piškotkih</h1>\n\
<p>Novi Zakon o elektronskih komunikacijah (Uradni list št. 109/2012), ZEKom-1 je v pravni red prinesel nova pravila glede uporabe piškotkov in podobnih tehnologij za shranjevanje informacij ali dostop do informacij, shranjenih na računalniku ali mobilni napravi uporabnika.</p>\n\
<p>Pridobljene informacije in podatke bomo skrbno varovali ter jih uporabljali izključno za potrebe izvajanja storitev.</p>\n\
<h2>Kaj so piškotki?</h2>\n\
<p>Piškotki so male besedilne datoteke, ki jih večina spletnih mest shrani v naprave, s katerimi uporabniki dostopajo do interneta z namenom prepoznavanja posameznih naprav, ki so jih uporabniki uporabili pri dostopu. Njihovo shranjevanje je pod popolnim nadzorom brskalnika, ki ga ima uporabnik - ta lahko shranjevanje piškotkov po želji omeji ali onemogoči.</p>\n\
<h2>Zakaj so piškotki potrebni?</h2>\n\
<p>So temeljnega pomena za zagotavljanje uporabniku prijaznih spletnih storitev. Interakcija med spletnim uporabnikom in spletnim mestom je s pomočjo piškotkov hitrejša in enostavnejša. Z njihovo pomočjo si spletno mesto zapomni posameznikove preference in izkušnje, s tem je prihranjen čas, brskanje po spletnih mestih pa bolj učinkovito in prijazno.</p>\n\
<h2>Nekaj konkretnih primerov uporabe piškotkov:</h2>\n\
<p>\n\
<ul><li>za boljšo uporabniško izkušnjo spletne strani obiskovalcem prilagodimo prikaz vsebine glede na pretekle obiske</li>\n\
<li>za shranjevanje izbire pri ustvarjanju ožjega izbora naprav in ponudbe ter njihove primerjave</li>\n\
<li>na delih spletnih mestih, kjer je potrebna prijava, vas ohranimo prijavljene</li>\n\
<li>za prepoznavanje vaše naprave (računalnik, tablica, mobitel), ki omogoča prilagajanje prikaza vsebine vaši napravi</li>\n\
<li>za spremljanje obiska, kar omogoča preverjanje učinkovitosti prikaza vsebin in ustreznosti oglasov ter stalno izboljšavo spletnih strani</li>\n\
<li>za delovanje določenih storitev so nujni (npr. spletne banke, spletne trgovine in druge oblike e-poslovanja, …)</li></ul>\n\
</p>\n\
<h2>Onemogočanje piškotkov</h2>\n\
<p>Uporabnik v vsakem času ohranja popoln nadzor nad piškotki, saj te lahko kadarkoli izbriše, omeji ali pa povsem onemogoči.</br>Navodila, kako to stori, se razlikujejo od naprave do naprave in so na voljo na domači strani posameznega proizvajalca programske opreme.</br>Vi torej odločite, ali boste dovolili shranjevanje piškotkov na vaši napravi.</br></br>\n\
Nastavitve za piškotke lahko nadzirate in spreminjate v vašem spletnem brskalniku:\n\
<ul><li><a href='https://support.google.com/chrome/answer/95647?hl=sl-sl&p=cpn_cookies' target='_blank'>Chrome</a></li>\n\
<li><a href='http://support.mozilla.org/sl/kb/Kako aktivirate in deaktivirate pi%C5%A1kote' target='_blank'>Firefox</a></li>\n\
<li><a href='http://windows.microsoft.com/sl-si/windows7/how-to-manage-cookies-in-internet-explorer-9' target='_blank'>Interne Explorer 9</a></li>\n\
<li><a href='http://windows.microsoft.com/sl-si/windows-vista/block-or-allow-cookies' target='_blank'>Internet Explorer 7 in 8</a></li>\n\
<li><a href='http://www.opera.com/help/tutorials/security/cookies/' target='_blank'>Opera <small>(stran v angleškem jeziku)</small></a></li>\n\
<li><a href='http://support.apple.com/kb/PH11913' target='_blank'>Safari <small>(stran v angleškem jeziku)</small></a></li></ul>\n\
</p><br />",
        cookieList:[
            {name:'_utma',use:'Statistika ogledov spletne strani',time:'2 leti',source:'Google Analytics'},
            {name:'_utmb',use:'Statistika ogledov spletne strani',time:'30 min',source:'Google Analytics'},
            {name:'_utmc',use:'Statistika ogledov spletne strani',time:'Trajanje seje',source:'Google Analytics'},
            {name:'_utmz',use:'Statistika ogledov spletne strani',time:'6 mesecev',source:'Google Analytics'},
            {name:'PHPSESSID',use:'Nastavitve strani',time:'Trajanje seje',source:'eBerce'},
            {name:'resolution',use:'Podatki o dimenziji strani',time:'Trajanje seje',source:'eBerce'},
                    ]
                    
        };
        var options = $.extend(defaults, options);
        var message = defaults.cookieMessage.replace('{{cookiePolicyLink}}', defaults.cookiePolicyLink);
        defaults.cookieMessage = 'We use cookies on this website, you can <a id="cookie_law_bullshit" href="' + defaults.cookiePolicyLink + '" title="read about our cookies">read about them here</a>. To use the website as intended please...';
        //convert options
        var cookiePolicyLinkIn = options.cookiePolicyLink;
        var cookieCutter = options.cookieCutter;
        var cookieCutterDeclineOnly = options.cookieCutterDeclineOnly;
        var cookieAnalytics = options.cookieAnalytics;
        var cookieDeclineButton = options.cookieDeclineButton;
        var cookieAcceptButton = options.cookieAcceptButton;
        var cookieResetButton = options.cookieResetButton;
        var cookieOverlayEnabled = options.cookieOverlayEnabled;
        var cookiePolicyLink = options.cookiePolicyLink;
        var cookieMessage = message;
        var cookieAnalyticsMessage = options.cookieAnalyticsMessage;
        var cookieErrorMessage = options.cookieErrorMessage;
        var cookieDisable = options.cookieDisable;
        var cookieWhatAreTheyLink = options.cookieWhatAreTheyLink;
        var cookieExpires = options.cookieExpires;
        var cookieAcceptButtonText = options.cookieAcceptButtonText;
        var cookieDeclineButtonText = options.cookieDeclineButtonText;
        var cookieResetButtonText = options.cookieResetButtonText;
        var cookieWhatAreLinkText = options.cookieWhatAreLinkText;
        var cookieNotificationLocationBottom = options.cookieNotificationLocationBottom;
        var cookiePolicyPage = options.cookiePolicyPage;
        var cookiePolicyPageMessage = options.cookiePolicyPageMessage;
        var cookieDiscreetLink = options.cookieDiscreetLink;
        var cookieDiscreetReset = options.cookieDiscreetReset;
        var cookieDiscreetLinkText = options.cookieDiscreetLinkText;
        var cookieDiscreetPosition = options.cookieDiscreetPosition;
        var cookieNoMessage = options.cookieNoMessage;
        var cookieOverlayText = options.cookieOverlayText;
        
        cookieOverlayText += '<h2>Naši piškotki</h2><table border="0" cellpadding="0" cellspacing="0"><tr><th>Ime piškotka</th><th>Namen</th><th>Čas poteka</th><th>Podjetje</th></tr>';
        for (var i = 0; i < options.cookieList.length; i++) {
          var row = options.cookieList[i];
          cookieOverlayText += '<tr><td>'+row.name+'</td><td>'+row.use+'</td><td>'+row.time+'</td><td>'+row.source+'</td></tr>';
        }
        cookieOverlayText += '</table>'
        
        // cookie identifier
        var $cookieAccepted = $.cookie('cc_cookie_accept') == "cc_cookie_accept";
        $.cookieAccepted = function () {
            return $cookieAccepted;
        };
        var $cookieDeclined = $.cookie('cc_cookie_decline') == "cc_cookie_decline";
        $.cookieDeclined = function () {
            return $cookieDeclined;
        };
        // write cookie accept button
        if (cookieAcceptButton) {
            var cookieAccept = ' <a href="#accept" class="cc-cookie-accept">' + cookieAcceptButtonText + '</a> ';
        } else {
            var cookieAccept = "";
        }
        // write cookie decline button
        if (cookieDeclineButton) {
            var cookieDecline = ' <a href="#decline" class="cc-cookie-decline">' + cookieDeclineButtonText + '</a> ';
        } else {
            var cookieDecline = "";
        }
        // write extra class for overlay
        if (cookieOverlayEnabled) {
            var cookieOverlay = 'cc-overlay';
        } else {
            var cookieOverlay = "";
        }
        // to prepend or append, that is the question?
        if ((cookieNotificationLocationBottom) || (cookieDiscreetPosition == "bottomright") || (cookieDiscreetPosition == "bottomleft")) {
            var appOrPre = true;
        } else {
            var appOrPre = false;
        }
        if (($cookieAccepted) || ($cookieDeclined)) {
            // write cookie reset button
            if ((cookieResetButton) && (cookieDiscreetReset)) {
                if (appOrPre) {
                    $('body').append('<div class="cc-cookies cc-discreet"><a class="cc-cookie-reset" href="#" title="' + cookieResetButtonText + '">' + cookieResetButtonText + '</a></div>');
                } else {
                    $('body').prepend('<div class="cc-cookies cc-discreet"><a class="cc-cookie-reset" href="#" title="' + cookieResetButtonText + '">' + cookieResetButtonText + '</a></div>');
                }
                //add appropriate CSS depending on position chosen
                if (cookieDiscreetPosition == "topleft") {
                    $('div.cc-cookies').css("top", "0");
                    $('div.cc-cookies').css("left", "0");
                }
                if (cookieDiscreetPosition == "topright") {
                    $('div.cc-cookies').css("top", "0");
                    $('div.cc-cookies').css("right", "0");
                }
                if (cookieDiscreetPosition == "bottomleft") {
                    $('div.cc-cookies').css("bottom", "0");
                    $('div.cc-cookies').css("left", "0");
                }
                if (cookieDiscreetPosition == "bottomright") {
                    $('div.cc-cookies').css("bottom", "0");
                    $('div.cc-cookies').css("right", "0");
                }
            } else if (cookieResetButton) {
                if (appOrPre) {
                    $('body').append('<div class="cc-cookies"><a href="#" class="cc-cookie-reset">' + cookieResetButtonText + '</a></div>');
                } else {
                    $('body').prepend('<div class="cc-cookies"><a href="#" class="cc-cookie-reset">' + cookieResetButtonText + '</a></div>');
                }
            } else {
                var cookieResetButton = "";
            }
        } else {
            // add message to just after opening body tag
            if ((cookieNoMessage) && (!cookiePolicyPage)) {
                // show no link on any pages APART from the policy page
            } else if ((cookieDiscreetLink) && (!cookiePolicyPage)) { // show discreet link
                if (appOrPre) {
                    $('body').append('<div class="cc-cookies cc-discreet"><a id="cookie_law_bullshit" href="' + cookiePolicyLinkIn + '" title="' + cookieDiscreetLinkText + '">' + cookieDiscreetLinkText + '</a></div>');
                } else {
                    $('body').prepend('<div class="cc-cookies cc-discreet"><a id="cookie_law_bullshit" href="' + cookiePolicyLinkIn + '" title="' + cookieDiscreetLinkText + '">' + cookieDiscreetLinkText + '</a></div>');
                }
                //add appropriate CSS depending on position chosen
                if (cookieDiscreetPosition == "topleft") {
                    $('div.cc-cookies').css("top", "0");
                    $('div.cc-cookies').css("left", "0");
                }
                if (cookieDiscreetPosition == "topright") {
                    $('div.cc-cookies').css("top", "0");
                    $('div.cc-cookies').css("right", "0");
                }
                if (cookieDiscreetPosition == "bottomleft") {
                    $('div.cc-cookies').css("bottom", "0");
                    $('div.cc-cookies').css("left", "0");
                }
                if (cookieDiscreetPosition == "bottomright") {
                    $('div.cc-cookies').css("bottom", "0");
                    $('div.cc-cookies').css("right", "0");
                }
            } else if (cookieAnalytics) { // show analytics overlay
                if (appOrPre) {
                    $('body').append('<div class="cc-cookies ' + cookieOverlay + '">' + cookieAnalyticsMessage + cookieAccept + cookieDecline + '<a id="cookie_law_bullshit" href="' + cookieWhatAreTheyLink + '" title="Visit All about cookies (External link)">' + cookieWhatAreLinkText + '</a></div>');
                    $('body').prepend('<div id="cookie_info">'+cookieOverlayText+'</div>');
                } else {
                    $('body').prepend('<div class="cc-cookies ' + cookieOverlay + '">' + cookieAnalyticsMessage + cookieAccept + cookieDecline + '<a id="cookie_law_bullshit" href="' + cookieWhatAreTheyLink + '" title="Visit All about cookies (External link)">' + cookieWhatAreLinkText + '</a></div>');
                    $('body').prepend('<div id="cookie_info">'+cookieOverlayText+'</div>');
                }
            }
            if (cookiePolicyPage) { // show policy page overlay
                if (appOrPre) {
                    $('body').append('<div class="cc-cookies ' + cookieOverlay + '">' + cookiePolicyPageMessage + " " + ' <a href="#accept" class="cc-cookie-accept">' + cookieAcceptButtonText + '</a> ' + ' <a href="#decline" class="cc-cookie-decline">' + cookieDeclineButtonText + '</a> ' + '</div>');
                    $('body').prepend('<div id="cookie_info">'+cookieOverlayText+'</div>');
                } else {
                    $('body').prepend('<div class="cc-cookies ' + cookieOverlay + '">' + cookiePolicyPageMessage + " " + ' <a href="#accept" class="cc-cookie-accept">' + cookieAcceptButtonText + '</a> ' + ' <a href="#decline" class="cc-cookie-decline">' + cookieDeclineButtonText + '</a> ' + '</div>');
                    $('body').prepend('<div id="cookie_info">'+cookieOverlayText+'</div>');
                }
            } else if ((!cookieAnalytics) && (!cookieDiscreetLink)) { // show privacy policy option
                if (appOrPre) {
                    $('body').append('<div class="cc-cookies ' + cookieOverlay + '">' + cookieMessage + cookieAccept + cookieDecline + '</div>');
                    $('body').prepend('<div id="cookie_info">'+cookieOverlayText+'</div>');
                } else {
                    $('body').prepend('<div class="cc-cookies ' + cookieOverlay + '">' + cookieMessage + cookieAccept + cookieDecline + '</div>');
                    $('body').prepend('<div id="cookie_info">'+cookieOverlayText+'</div>');
                }
            }
        }
        if ((cookieCutter) && (!cookieCutterDeclineOnly) && (($cookieDeclined) || (!$cookieAccepted))) {
            $(cookieDisable).html('<div class="cc-cookies-error">' + cookieErrorMessage + ' <a href="#accept" class="cc-cookie-accept">' + cookieAcceptButtonText + '</a> ' + '</div>');
        }
        if ((cookieCutter) && (cookieCutterDeclineOnly) && ($cookieDeclined)) {
            $(cookieDisable).html('<div class="cc-cookies-error">' + cookieErrorMessage + ' <a href="#accept" class="cc-cookie-accept">' + cookieAcceptButtonText + '</a> ' + '</div>');
        }
        // if bottom is true, switch div to bottom if not in discreet mode
        if ((cookieNotificationLocationBottom) && (!cookieDiscreetLink)) {
            $('div.cc-cookies').css("top", "auto");
            $('div.cc-cookies').css("bottom", "0");
        }
        if ((cookieNotificationLocationBottom) && (cookieDiscreetLink) && (cookiePolicyPage)) {
            $('div.cc-cookies').css("top", "auto");
            $('div.cc-cookies').css("bottom", "0");
        }
        // setting the cookies

        // for top bar
        $('.cc-cookie-accept, .cc-cookie-decline').click(function (e) {
            e.preventDefault();
            if ($(this).is('[href$=#decline]')) {
                $.cookie("cc_cookie_accept", null, {
                    path: '/'
                });
                $.cookie("cc_cookie_decline", "cc_cookie_decline", {
                    expires: cookieExpires,
                    path: '/'
                });
                if (options.cookieDomain) {
                    // kill google analytics cookies
                    $.cookie("__utma", null, {
                        domain: '.' + options.cookieDomain,
                        path: '/'
                    });
                    $.cookie("__utmb", null, {
                        domain: '.' + options.cookieDomain,
                        path: '/'
                    });
                    $.cookie("__utmc", null, {
                        domain: '.' + options.cookieDomain,
                        path: '/'
                    });
                    $.cookie("__utmz", null, {
                        domain: '.' + options.cookieDomain,
                        path: '/'
                    });
                }
            } else {
                $.cookie("cc_cookie_decline", null, {
                    path: '/'
                });
                $.cookie("cc_cookie_accept", "cc_cookie_accept", {
                    expires: cookieExpires,
                    path: '/'
                });
            }
            $(".cc-cookies").fadeOut(function () {
                // reload page to activate cookies
                location.reload();
            });
        });
        //reset cookies
        $('a.cc-cookie-reset').click(function (f) {
            f.preventDefault();
            $.cookie("cc_cookie_accept", null, {
                path: '/'
            });
            $.cookie("cc_cookie_decline", null, {
                path: '/'
            });
            $(".cc-cookies").fadeOut(function () {
                // reload page to activate cookies
                location.reload();
            });
        });
        //cookie error accept
        $('.cc-cookies-error a.cc-cookie-accept').click(function (g) {
            g.preventDefault();
            $.cookie("cc_cookie_accept", "cc_cookie_accept", {
                expires: cookieExpires,
                path: '/'
            });
            $.cookie("cc_cookie_decline", null, {
                path: '/'
            });
            // reload page to activate cookies
            location.reload();
        });
      $("#cookie_law_bullshit").leanModal();
    };
})(jQuery);


// leanModal v1.1 by Ray Stone - http://finelysliced.com.au
// Dual licensed under the MIT and GPL
(function($){
  $.fn.extend({ 
    leanModal: function(options) {
      var defaults = {
        top: 100,
        overlay: 0.7,
        closeButton: null
      }
      var overlay = $("<div id='cookie_info_overlay'></div>");
      $("body").append(overlay);
      options =  $.extend(defaults, options);
      
      return this.each(function() {
        var o = options;
        $(this).click(function(e) {
          var modal_id = $(this).attr("href");
          $("#cookie_info_overlay").click(function() { 
            close_modal(modal_id);                    
          });
            
          if (o.closeButton){
            $(o.closeButton).click(function() { 
              close_modal(modal_id);                    
            });
          }
                         	
          var modal_height = $(modal_id).outerHeight();
          var modal_width = $(modal_id).outerWidth();

          $('#cookie_info_overlay').css({
            'display' : 'block', 
            opacity : 0
          });

          $('#cookie_info_overlay').fadeTo(200,o.overlay);

          $(modal_id).css({ 
        		
            'display' : 'block',
            'position' : 'fixed',
            'opacity' : 0,
            'z-index': 11000,
            'left' : 50 + '%',
            'margin-left' : -(modal_width/2) + "px",
            'top' : o.top + "px",
            'height' : '70%'
        		
          });
          $(modal_id).fadeTo(200,1);
          e.preventDefault();
        });
             
      });

      function close_modal(modal_id){
        $("#cookie_info_overlay").fadeOut(200);
        $(modal_id).css({
          'display' : 'none'
        });
      }
    }
  });
})(jQuery);
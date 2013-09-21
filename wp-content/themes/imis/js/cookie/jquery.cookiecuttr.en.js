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
            cookieMessage: 'This website uses cookies (<a id="cookie_law_bullshit" href="{{cookiePolicyLink}}" title="več o piškotkih">more about cookies</a>) to manage authentication, navigation, and other functions. <br />By using our website, you agree that we can place these types of cookies on your device.',
            cookieAnalyticsMessage: 'We use cookies, just to track visits to our website, we store no personal details.',
            cookieErrorMessage: "We\'re sorry, this feature places cookies in your browser and has been disabled. <br>To continue using this functionality, please",
            cookieWhatAreTheyLink: "#cookie_info",
            cookieDisable: '',
            cookieExpires: 365,
            cookieAcceptButtonText: "I agree",
            cookieDeclineButtonText: "×",
            cookieResetButtonText: "RESET COOKIES",
            cookieWhatAreLinkText: "What are cookies?",
            cookieNotificationLocationBottom: false, // top or bottom - they are your only options, so true for bottom, false for top            
            cookiePolicyPage: false,
            cookiePolicyPageMessage: 'Please read the information below and then choose from the following options',
            cookieDiscreetLink: false,
            cookieDiscreetReset: false,
            cookieDiscreetLinkText: "Cookies?",
            cookieDiscreetPosition: "topleft", //options: topleft, topright, bottomleft, bottomright         
            cookieNoMessage: false, // change to true hide message from all pages apart from your policy page
            cookieDomain: "",
            cookieOverlayText: "<h1>Regulations about cookies</h1>\n\
<p>The Electronic Communications Act (Ur. l. RS, No.109/2012), ZEKom-1 decided on new laws regarding the usage of cookies and similar technologies for storing information or accessing them on a computer or a mobile device.</p>\n\
<p>Acquired information will be carefully secured and used only for the purpose of our services.</p>\n\
<h2>What are cookies?</h2>\n\
<p>Cookies are small files which are stored on a user's computer or mobile device with the purpose of recognizing these devices every time the user connects to the Internet. Storage is completely under control of the user's browser. The user decides whether to restrict or disable them.</p>\n\
<h2>Why are cookies necessary?</h2>\n\
<p>They are important for securing safe websites for a user. Cookies enable faster and easier interaction between users and web sites. They help web sites to remember user's preferences and experiences which saves time and makes browsing more efficient and better.</p>\n\
<h2>A few examples of cookies usage:</h2>\n\
<p>\n\
<ul><li>in order to improve users' experience, we adjust the display of contents according to user's previous visits of the web site</li>\n\
<li>selection storage of choosing devices and offers and their comparison</li>\n\
<li>we keep you signed in on parts of the web site where registration is necessary</li>\n\
<li>recognition of your device (computer, tab, mobile phone) enables the adjustment of contents on your device</li>\n\
<li>tracking your visits, which enables tracking of contents display efficiency and adequacy of adverts and constant improvement of websites</li>\n\
<li>some websites require cookies to work  (i.e. online banking, online shopping and other means of online businesses...)</li></ul>\n\
</p>\n\
<h2>Disabling cookies</h2>\n\
<p>Users have complete control over cookies at all times. They can delete, restrict or enable them completely.Instructions for cookie control differ from device to device, but are at one's disposal at the homepage of every software manufacturer.Only you decide whether to allow cookies storage on your device.</br></br>\n\
Cookies settings can be controlled and changed in your browser:\n\
<ul><li><a href='https://support.google.com/chrome/answer/95647?hl=en-gb&p=cpn_cookies' target='_blank'>Chrome</a></li>\n\
<li><a href='http://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences' target='_blank'>Firefox</a></li>\n\
<li><a href='http://windows.microsoft.com/en-gb/windows7/how-to-manage-cookies-in-internet-explorer-9' target='_blank'>Interne Explorer 9</a></li>\n\
<li><a href='http://windows.microsoft.com/en-gb/windows-vista/block-or-allow-cookies' target='_blank'>Internet Explorer 7 in 8</a></li>\n\
<li><a href='http://www.opera.com/help/tutorials/security/cookies/' target='_blank'>Opera</a></li>\n\
<li><a href='http://support.apple.com/kb/PH11913' target='_blank'>Safari</a></li></ul>\n\
</p><br />",
        cookieList:[
            {name:'_utma',use:'View statistics',time:'2 years',source:'Google Analytics'},
            {name:'_utmb',use:'View statistics',time:'30 min',source:'Google Analytics'},
            {name:'_utmc',use:'View statistics',time:'For one session',source:'Google Analytics'},
            {name:'_utmz',use:'View statistics',time:'6 months',source:'Google Analytics'},
            {name:'PHPSESSID',use:'Page settings',time:'For one session',source:'eBerce'},
            {name:'resolution',use:'Dimension information',time:'For one session',source:'eBerce'},
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
        
        cookieOverlayText += '<h2>Our cookies</h2><table border="0" cellpadding="0" cellspacing="0"><tr><th>Cookie name</th><th>Purpose</th><th>Timeout</th><th>Issuer</th></tr>';
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
// slider 
  $(window).load(function() {
    $('.flexslider').flexslider({
    	controlNav: true, 
    	controlNav: "thumbnails",
    	pauseOnHover: true,
    	selector: ".slides > li", 
    	directionNav: false,
    	animationLoop: true,
    	slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 600,
    	
    manualControls: "#controls > li"
    });

  });

$(function( ) {
	$(".flex-active").css( {
		"background": "#000000",
		"padding-bottom" : "1px"
	  });
});


// right sidebar
// remove  border on last element 
$(function( ) {
	$(".sidebar-two section:last").css( {
		"border-bottom": "none",
		"padding-bottom" : "1px"
	  });
});

//search dropdown
// ad text to search text field
$(function( ) {
	var searchForm = $(".main-navigation .searchform input[type=text]");
	searchForm.val("Išči...");
	searchForm.click(function() {          
        $(this).val('')          
               .unbind('click'); 
     });

	

/*

// show search dropdown while writing text
	searchForm.focus(function () {
	
	$(this).closest(".children").css( {
		"display": "block",
    	"filter" : "alpha(opacity=10)",
    	"opacity" : "10",
    	"visibility": "visible"
	 	});
	});

*/

	// remove border on last main-navigation button
	$(function(){
		$(".main-navigation > ul > li:last").css("border-right", "none");

	});





	


});






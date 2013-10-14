// slider 
  
    $('.flexslider').flexslider({
    	controlNav: true, 
    	controlNav: "thumbnails",
    	pauseOnHover: true,
    	selector: ".slides > li", 
    	directionNav: false,
    	animationLoop: true,
    	slideshowSpeed: 4000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 600,
    	manualControls: "#controls > li",

     start: function(slider) {
              $("#featured").removeClass('loading');
           }
    });

  


// remove border on last main-navigation button

$(".main-navigation > ul > li:last").css( {
		"border-right": "none",
		"margin-right": "1px"
} );


// right sidebar
// remove  border on last element 
	$(".sidebar-two section:last").css( {
		"border-bottom": "none",
		"padding-bottom" : "1px"
	  });


//search dropdown
// ad text to search text field
/*$(function( ) {
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

* /


}); */


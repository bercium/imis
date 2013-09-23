// slider 
(function(){  	
	
	$("#featured").tabs({fx:{opacity: "toggle", duration: 400 }}).tabs("rotate", 4000, true);  

	$("#featured").hover(  
function() {  
	$("#featured").tabs("rotate",0,true);  
	},  
	function() {  
	$("#featured").tabs("rotate",4000,true);  
	}  
	);  


}());


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






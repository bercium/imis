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
	searchForm.val("išči...");
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



});






$(function () {	

	$("#alert-list").delegate("a.close", 'click', function(e) {
		var li = $(e.target).closest("li");
		li.slideUp("fast");
	});
	
})
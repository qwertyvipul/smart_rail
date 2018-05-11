$(document).ready(function(){
	var centHeight = $(".cent-div").outerHeight();
	var screenHeight = $(window).height();
	$(".cent-div").css("margin-top", (screenHeight-centHeight)/2);
	$(window).resize(function(){
		var screenHeight = $(window).height();
		$(".cent-div").css("margin-top", (screenHeight-centHeight)/2);
	});
});
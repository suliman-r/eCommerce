$(function  () {

	'use strict';

	//Hide Placeholder
	$("input[placeholder]").on("focus", function () {

	    $(this).attr("data-text", $(this).attr("placeholder"));

		$(this).attr("placeholder", "");

	});

	$("input[placeholder]").on("blur", function () {

		$(this).attr("placeholder", $(this).attr("data-text"));

	});



	$("div.solo").css({
		color: 'maroon',
		fontWeight: 'bold',
		position: 'absolute',
		left: '380px',
		fontSize: '80px',
		top:'350px',
		display: 'none'
		
	}).fadeIn(5000).fadeOut(2000);
	


});
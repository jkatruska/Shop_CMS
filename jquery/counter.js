// JavaScript Document
var main = function(){
	$('#popis').keyup(function(){
		var postLength = $(this).val().length;
		var characterLeft = 244 - postLength;
		$('#counter').text(characterLeft);
		});
};

$(document).ready(main);
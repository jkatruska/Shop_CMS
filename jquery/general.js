// JavaScript Document
$(document).ready(function(){
	$('#content').load('vypis_vypredaj.php');	
	
	$('ul#menu li a').click(function(){
		var page =$(this).attr('href');
			$('#content').load(page +'.php');
			return false;
		});
});
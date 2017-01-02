<?php
	$user = $_POST["username"];
	$pass = $_POST["password"];
	if ($user == "admin" && $pass == "admin"){
		header ("Location: /tonyo/cms.php");
		}
	else{
		echo ("zlé meno alebo heslo");
	}
?>
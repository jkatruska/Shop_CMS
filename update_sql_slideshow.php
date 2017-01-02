<?php
	include "connect.php";
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$id = $_POST['id'];
	if($image == NULL){
		$sql = "SELECT * FROM slideshow WHERE id= '$id'";
		$sada = mysql_query($sql);
		$zaznam = mysql_fetch_array($sada);
		$image = $zaznam['image'];
	}
	else{
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));			
	}
	$sql = "UPDATE slideshow SET image='$image' WHERE id='$id'";
	mysql_query($sql); //or die(mysql_error());
	header("Location: cms.php");
	exit;

?>
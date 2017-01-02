<?php
	include "connect.php";
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$name = $_POST['image_name'];
	$popis = $_POST['popis'];
	$stara_cena = $_POST['stara_cena'];
	$nova_cena = $_POST['nova_cena'];
	$id = $_POST['id'];
	if($image == NULL){
		$sql = "SELECT * FROM images_sale WHERE id= '$id'";
		$sada = mysql_query($sql);
		$zaznam = mysql_fetch_array($sada);
		$image = $zaznam['image'];
	}
	else{
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));			
	}
	$sql = "UPDATE images_sale SET image='$image',name='$name',stara_cena='$stara_cena',nova_cena='$nova_cena',popis='$popis' WHERE id='$id'";
	mysql_query($sql); //or die(mysql_error());
	header("Location: cms.php");
	exit;

?>
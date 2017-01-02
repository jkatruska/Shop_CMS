<?php 
include "connect.php";
$file = $_FILES['image']['tmp_name'];
if (!isset($file)){
	echo "prosím nahrajte obrázok.";
}
else{
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes ($_POST['image_name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	$stara_cena = addslashes ($_POST['stara_cena']);
	$nova_cena = addslashes ($_POST['nova_cena']);
	$popis = addslashes ($_POST['popis']);
	
	if($image_size==FALSE){
		echo "To nieje obrázok";
	}
	else
	{
		if (!$insert = mysql_query("INSERT INTO images_sale VALUES ('','$image_name','$image','$stara_cena', '$nova_cena', '$popis')"))
			echo "Pri nahrávaní sa vyskytol problém " . mysql_error(); 
		else {
			echo "Nahratie úspešné";
			header ("location: cms.php");
			exit;
		}
	}
		
}
?>

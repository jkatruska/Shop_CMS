<?php
	include "connect.php";
	$id = $_GET["id"];
	$sql = "DELETE FROM images_sale WHERE id='$id'";
	mysql_query($sql);
	header("Location: cms.php");
	exit;
	
?>
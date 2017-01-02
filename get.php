<?php 
	include "connect.php";
	$query = mysql_query("SELECT * FROM images_sale");
	echo ('<div class="overlay_wrapper">');
	while ($row = mysql_fetch_assoc($query)){
		$images[] = $row ['image'];
		echo ('<div class="overlay">');
		echo ('<p class="nazov_produktu">' . $row['name'] . '</p>');
		echo nl2br(('<p class="popis">' . $row['popis'] . '</p>'));
		echo ('<p class="stara_cena">' . $row['stara_cena'] . '€</p>');
		echo ('<p class="nova_cena">' . $row['nova_cena'] . '€</p>');
		echo ('</div>');	
	}
	echo ('</div>');
	foreach ($images as $image){
		echo '<img src="data:image/jpeg;base64,' . base64_encode($image). '" class="img_sale">';
	}
	
?>

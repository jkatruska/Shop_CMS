<?php 
	include "connect.php";
	echo('<table id="sale">');
		echo('<tr>');
			echo('<th>Názov</th>');
			echo('<th>Popis</th>');
			echo('<th>Stará cena</th>');
			echo('<th>Nová cena</th>');
			echo('<th>Upraviť</th>');
			echo('<th>Zmazať</th>');
		echo('</tr>');
	$query = mysql_query("SELECT * FROM images_sale");
	while ($row = mysql_fetch_assoc($query)){
		$images[] = $row ['image'];
		echo('<tr>');
			echo('<td>'.$row['name'].'</td>');
			echo('<td>'.$row['popis'].'</td>');
			echo('<td>'.$row['stara_cena'].'€</td>');
			echo('<td>'.$row['nova_cena'].'€</td>');
			echo ('<td><a href="update-sale.php?id=' . $row['id']. '">Upraviť</a></td>');
			echo ("<td>" . "<a href=\"delete-sale.php?id=" . $row['id']. "\">" ."Zmazať" . "</a>" . "</td>");

		echo('</tr>');
	}	
	echo('</table>');
?>	
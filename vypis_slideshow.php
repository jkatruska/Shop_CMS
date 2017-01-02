<?php 
	include "connect.php";
	echo('<table>');
		echo('<tr>');
			echo('<th>Náhľad</th>');
			echo('<th class="edit">Upraviť</th>');
		echo('</tr>');
	$query = mysql_query("SELECT * FROM slideshow");
	$row['id'] = "";
	while ($row = mysql_fetch_assoc($query)){
		$images[] = $row ['image'];
		$ids[] = $row['id'];
	}	
	foreach (array_combine($images,$ids) as $image => $id){
		
		echo '<tr>';
			echo '<td>';
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image). '" class="img_sale">';
			echo '</td>';
			echo '<td class="edit">';
				echo '<a href="update-slideshow.php?id=' .$id. '">Upraviť</a>';
			echo '</td>';
		echo '</tr>';
		
	}
	echo('</table>');
?>	
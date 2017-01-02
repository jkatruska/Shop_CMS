<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tonyo nábytok | CMS</title>
<link rel="stylesheet" type="text/css" href="style-cms.css">
<script src="jquery/jquery.js"></script>
<script src="clock.js"></script>
</head>

<body onLoad="startTime()">
	<div id="fixed">
    	<img src="img/logo.png" id="logo">
        <div id="back">
            <a href="index.php">Späť na stránku</a>
        </div>
        <div id="time">
                <div id="hours_mins"></div>
                <div id="seconds"></div>
       </div>
    </div>
    </div>
    <div id="obsah">
    	<?php
		include "connect.php";
		$id = $_GET["id"];
		$sql = "SELECT * FROM images_sale WHERE id= '$id'";
		$sada = mysql_query($sql);
		$zaznam = mysql_fetch_array($sada);
		
	?>
    <table id="update">
    	<tr>
        	<th id="first">Obrázok</th>
		</tr>
        <tr>
        	<form method="post" action="update_sql_slideshow.php" enctype="multipart/form-data">
        	<td>
                <input type="file" name="image" accept="image/*">
            </td>
            	<input type="hidden" name="id" value="<?php echo $id ;?>">
                <td><input type="submit" value="zmeniť"> </td>
       		</form>
       </tr>
           </table>
    </div>
    <script src="jquery/general.js"></script>
</body>
</html>
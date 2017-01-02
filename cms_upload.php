<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="jquery/jquery.js"></script>
<script src="jquery/counter.js"></script>
</head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<div style="float:left; font-family:Oswald; margin-left:1.5vw; margin-top:0.5vh;">
    Názov produktu:<br>
   	<input type="text" name="image_name" placeholder="Názov produktu"><br>
    Stará cena:<br>
   	<input type="text" name="stara_cena" placeholder="Stará cena"><br>
    Nová cena:<br>
    <input type="text" name="nova_cena" placeholder="Nová cena"><br>
    </div>
    <div style="font-family:Oswald; float:right; margin-right:1.5vw; margin-top:0.5vh; position:relative;">Popis:<br>
    <div id="counter">244</div>
   	<textarea name="popis" placeholder="Popis" id="popis"></textarea>
    </div>
    <input type="file" name="image" accept="image/*"><br>
    <input type="submit" value="nahrať">
</form>
</body>
</html>
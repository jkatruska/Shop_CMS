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
    <div id="left-panel">
    	<ul id ="menu">
        	<li id="sale"><a href="vypis_vypredaj">Výpredaj</a>
            <li id="add_sale"><a href="cms_upload">Pridať záznam</a>
            <li id="slideshow"><a href="vypis_slideshow">Slideshow</a>
        </ul>
    </div>
    <div id="content">
    </div>
    <script src="jquery/general.js"></script>
</body>
</html>
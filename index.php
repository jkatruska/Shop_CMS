<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tonyo Nábytok</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery/jquery.js"></script>
<script src="jquery/slideshow.js"></script>
</head>

<body>
	<div id="wrapper">
        <?php
			include("logo.php");
			include("menu.php");
			include("slideshow.php");
		?>
        <div id="main">
        	<p class="title">Úvod
            </p> <!--end title-->
            <div id="line"></div> <!--end line-->
        	<p id="text">
            <b>TONYO - obchod s nábytkom.</b> Firma vznikla v roku 1992 , zaoberá sa predajom nábytku slovenských aj zahraničných výrobcov. Naším cieľom je splniť požiadavky a realizovať predstavy čo najširšieho okruhu zákazníkov. Poskytujeme poradenstvo pri zariaďovaní bytových aj nebytových priestorov. Zabezpečíme odvoz , vynesenie aj montáž nábytku.
            </p> <!--end text-->
            <img id="predajna" src="img/Predajna_1.jpg">
        </div> <!--end main-->
        <?php
			include("footer.php");
		?>
	</div> <!--end wrapper-->
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prihlásiť sa</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="clock.js"></script>
</head>

<body onLoad="startTime()">
	<div id="left">
    	<div id="time">
            <div id="hours_mins"></div>
            <div id="seconds"></div>
        </div>
    </div>
    <div id="mid">
    	<div id="vertical-line"></div>
    </div>
    <div id="right">
    	<form action="login_form.php" method="post" id="login_form">
        	Užívateľské meno:<br>
        	<input type="text" name="username" placeholder="Užívateľské meno"><br>
            Heslo:<br>
            <input type="password" name="password" placeholder="Heslo"><br>
            <input type="submit" value="Prihlásiť sa">
        </form>
    </div>
</body>
</html>
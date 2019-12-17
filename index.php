<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DICE ROLL GAME</title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>

<body>
<div class="range">
	<div class="wrap">
	    <img src="img/<?php echo rand(1,6)?>.png" width="512" height="512" />	    
    </div>
   	<div class="wrap_button">
    <input class="button" type="submit" name="button" id="button" value="Play" onclick="window.location.reload(false);" />
    </div>
</div>
</body>
</html>
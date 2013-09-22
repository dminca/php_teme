<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd
>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Interschimbare2</title>
</head>
<body>

	


<form method="get" action="">
<label>Date intrare:</label>
<br>
<input type="text" name="a" value=""/>
<br>
<input type="text" name="b" value=""/>
<br>
<input type="submit" name="btn" value="Submit"/>
</form>

<?php

function sp($a, $b, &$s ,&$p) {
	$s=$a+$b;
	$p=$a*$b;
}

sp(3,4, $s, $p);
echo "s=$s,p=$p";

?>
</body>
</html>

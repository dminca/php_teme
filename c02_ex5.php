<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd
>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title> Ex 05 </title>
</head>
<body>

<form method="get" action="">
	<label>An:</label>
	<br>
	<input type="text" name="an" value=""/>
	<br>
	<input type="submit" name="btn" value="Calculeaza!"/>
</form>	

<?php
$an = $_GET['an'];


if(($an % 4 == 0 && $an % 100 !=0) ||
($an % 400 == 0)) { 
	echo "$an este bisect";
	} else { 
		echo "$an nu este bisect"; 
	}

//fadraar


?>

</body>
</html>

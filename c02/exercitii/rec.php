<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title> rec. php</title>
</head>
<body>
<form method="get" action="">
<label>SB</label>
<input type="text" name="SB" value="" />
<br/>
<input type="submit" name="btn" value="Calculeaza"/>
</form>


<!-- PHP CODE -->
<?php
 //print_r($_GET);
$SB = $_GET['SB'];
$CAS = (10.5/100)*$SB;
$CASS = (5.5/100)*$SB;
$somaj = (0.5/100)*$SB;
$impozit = (16/100)*$SB;



?>
</body>
</html>
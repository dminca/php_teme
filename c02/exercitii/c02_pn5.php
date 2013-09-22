<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd
>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title> c02</title>
</head>
<body>


<form method="get" action="">
<label>n:</label>
<br>
<input type="text" name="n" value=""/>
<br>
<input type="submit" name="btn" value="Calc"/>
</form>


<?php

$n = $_GET['n'];
for($i=1; $i<=$n;$i++){
	if($i%2==0) {
	echo "<span style=\"color: red;\">$i</span>";
	} else {
	echo "<span style=\"color: blue;\">$i</span>";
	}
}

?>


</body>
</html>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd
>"
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title> </title>
</head>
<body>

<form method="get" action="">
<label>A:</label>
<br>
<input type="text" name="a" value=""/>
<br>
<label>B:</label>
<br>
<input type="text" name="b" value=""/>
<br>
<input type="submit" name="btn" value="Calc"/>
</form>


<?php

$nr=0;
$a = $_GET['a'];
$b = $_GET['b'];
for($i = $a; $i <= $b; $i++) {
	if ($nr==5) {
		echo "<br/>";
		$nr = 0;
	}
	echo "$i ";

	$nr++;

}

?>

</body>
	</html>

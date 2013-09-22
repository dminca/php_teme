<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>In clasa</title>
</head>

<body>
</body>
<?php

function cifra_control($n){
	$s = 0;
	do {
		$n_array = str_split($n);
		$s = array_sum($n_array);
		$n = $s;
	} while ($n >=10);
	return $s;
} // end function

//scriptul principal
$x = 6101986;
$cc = cifra_control($x);
echo "cc($x) = $cc";


?>
</html>

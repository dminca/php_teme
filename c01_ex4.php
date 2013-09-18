<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>c01 Ex04</title>
<style type="text/css">
html { 
    font-size:100.01%; 
}
body {
  font-size: 75%;
  color: #222;
  background: #fff;
  font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
}
    form {
        background-color: #F8CA4D;
        width: 300px;
        border: 2px solid #3F5666;
        box-shadow: 8px 5px 10px;
        -moz-box-shadow: 8px 5px 10px;
        -webkit-box-shadow: 8px 5px 10px;
}

a:link {
    text-decoration: none;
}

a:hover {
    color: red;
    font-weight: bold;
}
</style>
</head>
<body>
<form method="get" action="">
	<a href="http://localhost/c01/01_ex4.php">Restart</a> | <a href="http://localhost">Home</a> |<br>
	<label>Introduceti Brutul</label>
	<br>
	<input type="text" name="brutul" value=""/>
	<br>
	<input type="submit" name="btn" value="Calculeshte"/>
</form>	

<?php
$brut=$_GET['brutul'];
$values = array('pensii' => 208 , 'sanatate' => 52 , 'fondCI' => 9 , 'somaj' => 5 , 'fondGarSal' => 3 , 'fondAcMnk' => 4);

$salComplet=array_sum($values)+$brut;

echo "Salariul COMPLET platit de angajator: $salComplet lei";
?>

</body>
</html>

<html>
<head>
	<title>c02 ex6</title>
</head>
<body>

<form method="get" action="">
	<a href="http://localhost/c02">Back one level</a>
	<br/>
<label>Setati Ziua, luna, anul:</label>
<br/>
<label>Ziua</label>
<input type="text" name="zi" value=""/>
<br/>
<label>Luna</label>
<input type="text" name="luna" value=""/>
<br/>
<label>Anul</label>
<input type="text" name="an" value=""/> 
<br/>
<input type="submit" name="btn" value="Calculeaza"/>
</form>

<?php


$zi = $_GET['zi'];
$luna = $_GET['luna'];
$an = $_GET['an'];

if (checkdate($luna, $zi, $an) == TRUE) {
	echo "data valida";
} else {
	echo "data nu este valida";
}


?>

</body>
</html>

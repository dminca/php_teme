<html>
<head>
	<title>c02 ex8</title>
</head>
<body>

<form method="get" action="">
<label>Introduceti luna</label>
<br/>
<input type="text" name="Luna" value=""/>
<br/>
<input type="submit" name="" value="Afla"/>
</form>

<?php

$luna = $_GET['Luna'];

/* UN MOD DE-A LUCRA ***
switch ($luna) {
	case 12:
	case 1:
	case 2:
		echo "iarna";
		break;


	case 3:
	case 4:
	case 5:
		echo "primavara";
		break;

*/

switch ($luna) {

case ($luna >= 6 && $luna <= 8):
	echo "vara";
	break;

case ($luna >=9 && $luna <= 11):
	echo "toamna";
	break;

case ($luna == 12 || ($luna>=1 && $luna <= 2)):
	echo "iarna";
	break;

case ($luna >=3 && $luna <= 5):
	echo "primavara";
	break;	

default:
	echo "Valoare eronata";
	
}


?>
</body>
</html>
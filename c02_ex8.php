<html>
<head>
	<title></title>
</head>
<body>

<form method="get" action="">
<label>Introduceti luna</label>
<br>
<input type="text" name="luna" value=""/>
<br>
<input type="submit" name="" value="Afla"/>
</form>

<?php

$luna = $_GET['luna'];

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

case ($luna >= 6 && $luna <= 8):
	echo "vara";
	break;

case ($luna >=9 && $luna <= 11)	:
	echo "toamna";
	break;

default:
	echo "Valoare eronata";
	
}


?>
</body>
</html>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd
>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title> </title>
</head>
<body>

<form method="get" action="">
	<label>Salariul angajatorului: </label>
	<br>
	<input type="text" name="salCompAng" value=""/>
	<br>
	<input type="submit" name="btn" value="Razuieste aici!"/>
</form>	


<?php 
/* Contributiile angajatorului */
$salCompAng= $_GET['salCompAng'];
$contribAng=array('Fond pensii' => 162,	'fond sanatate' => 41, 'fond concedii si indemnizatii' => 7, 'fond somaj' => 4, 'fond garantare salarii' => 2, 'fond acc. d munca' => 3);
$totContribAng=array_sum($contribAng);

$salBrut=$salCompAng-$totContribAng;

/* Contributiile salariatului */
$contribSal=array('fond pensii sal' => 82, 'fond sanatate sal' => 43, 'fond somaj sal' => 4, 'impozit pe venit' => 104);

$totContribSal=array_sum($contribSal);
$salNet=$salBrut-$totContribSal;

echo "Salariul NET este: <strong>$salNet lei</strong>";
?>

</body>
</html>

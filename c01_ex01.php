<html>
<head>
	<title>c01 Ex01 cu formular</title>
	<style type="text/css">
form {
	background-color: #F8CA4D;
	width: 300px;
	border: 2px solid #3F5666;
	box-shadow: 8px 5px 10px;
	-moz-box-shadow: 8px 5px 10px;
	-webkit-box-shadow: 8px 5px 10px;
}
	</style>
</head>
<body>
<form method="get" action="">
	<label>Introduceti suma in RON:</label>
	<input type="text" name="lei" value=""/>
	<br>
	<input type="submit" name="btn" value="Afla cati EURO!"/>

</form>
<!-- ** CODUL PHP ADAUGAT ** --!>
<?php
$lei=$_GET['lei'];
$euro=4.47;
$rezultat=$lei/$euro;

echo "Rezultatul: <strong>$lei lei</strong> ". "inseamna <strong>$rezultat". " euro</strong>";

/*
if ($rezultat > 0) {
	print "Rezultatul: <strong>$lei lei</strong> ". "inseamna <strong>$rezultat". " euro</strong>";
} else {
	print "Trebuie sa introduci o suma mai mare decat 0 !";
	// Aici afli daca iti da rezultatul corect sau nu.
}
*/
?>
</body>
</html>

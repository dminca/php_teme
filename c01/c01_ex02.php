<html>
<head>
	<title>C01 Ex02 cu formular</title>
<style type="text/css">
* {
	font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
	font-size: 97%;
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
    font-style: italic;
}
</style>
</head>
<body>
<form method="get" action="">
	<a href="http://localhost/c01/c01ex02.php">Restart</a> | <a href="http://localhost">Home</a> <br>
	<label>Introduceti nota la testele online:</label>
	<input type="text" name="notaOnline" value=""/>
	<br>
	<label>Introduceti nota pe proiect:</label>	
	<input type="text" name="notaProiect" value=""/>
	<br>
	<label>Introduceti nota pe activitate:</label>
	<input type="text" name="notaActivitate" value=""/>
	<br>
	<input type="submit" name="btn" value="Calculate!"/>

</form>

<!-- **De aici incepe codul PHP** --!>

<?php				
$nota_online = @$_GET['notaOnline'];
$nota_proiect = @$_GET['notaProiect'];
$nota_activitate = @$_GET['notaActivitate'];

$medie = 0.5*$nota_proiect+0.4*$nota_online+0.1*$nota_activitate;

echo "Media ta este <strong> $medie </strong> " . " . Mai invata PHP!";
?>

</body>
</html>





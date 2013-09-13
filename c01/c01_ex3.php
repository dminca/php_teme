<html>
<head>
	<title>c01 Ex03</title>
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

input[type="text"] {
    border: none;
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
    <a href="http://localhost/c01/01_ex3.php">Restart</a> | <a href="http://localhost">Home</a> |<br>
    <label>Introduceti salariul dvs. <u>brut</u></label>
    <br>
    <input type="text" name="salarBrut" value="<?=(isset( $_GET['salarBrut'] ))?$_GET['salarBrut']:''?>"/>
    <br>
    <input type="submit" name="btn"/>
</form>



<?php
    if( isset( $_GET['salarBrut'] ) ){
        echo "sal :".$salBrut = $_GET['salarBrut'];
        $contributii = array("pensii" => 105,
                    "sanatate" => 55,
                    "somaj" => 5,
                    "impozit" => 134);
        echo "<br>sum :".$totContrib = array_sum($contributii);

        echo "<br>net :".$salNet = $salBrut-$totContrib;

        echo "<br>Salariul net este $salNet";    
    }
?>

</body>
</html>

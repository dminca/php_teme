<?php

$a = array('Ana' , 'Mihai' , 'Cosmin');
$n = count($a);
//print_r($n);

/*
for ($i=0; $i < $n; $i++) { 
	echo $a[$i];
}
*/

$l = '<ol>';

for ($i=0; $i < $n; $i++) { 
	$l.="<li>$a[$i]</li>";
}

$l.="</ol>";

echo $l;

?>
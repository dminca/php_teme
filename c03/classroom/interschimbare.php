<?php

function interschimb($a, $b) {
	$c=$a; $a=$b; $b=$c;
}

//scriptul principal
$a= 5; $b= 7;
interschimb($a,$b);
echo "a nou = $a, b nou = $b";

?>
<?php
/*
6. Creati un script care, pentru o valoare n data, afiseaza numerele mai mici decat n cate 5 pe linie. Numerele de pe linii impare vor fi scrise cu rosu iar cele de pe linii pare cu albastru.
*/
$n=100;
$linie=1;
$nr_elemente=0;
//start tabel
echo "<table border=\"1\"><tr>";
for($i=1;$i<=$n;$i++){
	$nr_elemente++;
	if($linie%2!=0){// daca sunt pe linie impara, scriu cu rosu
		echo "<td style=\"color:red\">$i</td> ";
		}
	else{//daca sunt pe linie para, scriu cu albastru
		echo "<td style=\"color:blue\">$i </td>";
		}
	//daca am afisat 5 elemente pe linie, trec la urmatoarea linie
	if($nr_elemente%5==0){
		if($nr_elemente<$n){ 
	echo "</tr><tr>";$linie++;
		} else {
		echo "</tr>";	
		}
	}
}
	
echo "</table>";	
?>
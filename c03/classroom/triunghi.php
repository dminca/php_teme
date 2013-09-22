<?php

###
#	j
#----------->
#|*
#|* *
#|* * *
#i
#|* * * *
#\/
###

function triunghi($n){
	//pt fiecare linie
	for($i=1;$i<=$n;$i++){
		//afisez stelutele
		for($j=1;$j<=$i;$j++){
			echo "*";
		}
		//trec la rand nou
		echo "<br/>";
	} 
}//end function

//scriptul principal
triunghi(5);
triunghi(3*4);

?>
<?php

for ($i=1;$i<=100;$i++){
	$div = $i%2; 
	if ($div===0) {
		echo "$i**".PHP_EOL;
		
	}
	else{
		echo "$i*".PHP_EOL;
	}
}



?>
<?php  

$matriz = array();
 for ($i =1; $i<=100; $i++){
 	$vetor= array();
 	    for ($j=1;$j<=5; $j++){
 	    	$vetor = mt_rand(1,50);

 	    }
 	    $matriz [$i] =$vetor;
 }
 $matriz [98][2] =57;
 print_r ($matriz);



?>
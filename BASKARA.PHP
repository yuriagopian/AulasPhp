<?PHP 

//VALORES INPUTADOS
$A=10.3;
$B=  203.0 ;
$C =5.0;
//DELTA
$DELTA = (($B*$B) - ((4*$A)*$C)) ;

//EQUAÇÃO
if($delta<0 || $A ==0){
	Echo "Impossivel de calcular !!!";
}else {
$R1=((-$B + sqrt($DELTA)) /(2*$A) );
$R2=((-$B - sqrt($DELTA)) /(2*$A) );
echo number_format("$R1",5).PHP_EOL;
echo number_format( "$R2",5).PHP_EOL;

}






?>
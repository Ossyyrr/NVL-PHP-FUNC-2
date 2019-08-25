<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
 	<title> Prework </title>
<style>

</style> 
</head>
	<body>


<?php


function cuentaLetraA($a, $letra){
$e= str_split($a);
$i=0;
foreach($e as $k => $v){
	if($v == $letra){
		$i++;}
}
echo $i;
}
cuentaLetraA("Hola que tal estas, el otro dia fui a dar una vuelta y hacia muchiiiiiiiiisiiiiiiiiimo calor ", "i");


?>



	</body>	    
</html>
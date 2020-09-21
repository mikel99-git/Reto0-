<?php 



function dameFecha(){
$fecha = getdate();
$hora = $fecha['hours'];
$minutos =  $fecha['minutes'];
$dia = $fecha['mday'];
$mes = $fecha['mon'];
$año = $fecha['year'];

echo $hora . ":" . $minutos;
echo "<br>";
echo $dia . "/" . $mes . "/" . $año;
}
dameFecha();
?>

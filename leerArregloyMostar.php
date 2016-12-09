<?php

$datosMotivos= array();
$copia;

while($row = mysqli_fetch_array($result)) { 
$copia=$row;
$cod=$row['cod'];
$descripcion=$row['descripcion'];
$motivo=$row['motivo'];
$lugar=$row['lugar'];

$datosMotivos[] = array('cod'=> $cod, 'descripcion'=> $descripcion, 'motivo'=> $motivo, 'lugar'=> $lugar); 
}

?>
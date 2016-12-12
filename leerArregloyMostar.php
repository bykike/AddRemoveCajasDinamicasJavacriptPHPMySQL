<?php

/* Aquí guardaremos el arreglo para el usuario */

$arrayIdioma = $_POST["Idioma"];
$arrayNivelHablado = $_POST["NivelHablado"];
$arrayNivelEscrito = $_POST["NivelEscrito"];


$i=0;
while($i < count($arrayIdioma)) {
   echo $arrayIdioma[$i]." - ".$arrayNivelHablado[$i]." - ".$arrayNivelEscrito[$i]."<br>"; 
   $i++; 
}

/*
    foreach ($arrayIdioma as $valor) {
    echo "Valor: $valor<br />\n";
    }
*/

?>

<div>
   <!-- Volver apantalla inicial -->
   <br><br>
    <input class="btn btn-default" type="button" value="Volver al menú principal" onclick="location.href='AddCamposJavascript.php'">
    <br><br>
</div>
    
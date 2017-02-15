<?php

/* Aquí guardaremos el arreglo para el usuario */

$nombre = $_POST["Nombre"];
$apellidos = $_POST["Apellidos"];
$pais = $_POST["Pais"];

$arrayIdioma = $_POST["Idioma"];
$arrayNivelHablado = $_POST["NivelHablado"];
$arrayNivelEscrito = $_POST["NivelEscrito"];

echo $nombre ."<br/>";
echo $apellidos."<br/>";
echo $pais."<br/><br/>";


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
    
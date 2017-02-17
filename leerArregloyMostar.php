<?php

	/* Aquí guardaremos el arreglo para el usuario */

	$nombre = $_POST["Nombre"];
	$apellidos = $_POST["Apellidos"];
	$pais = $_POST["Pais"];


	echo $nombre ."<br/>";
	echo $apellidos."<br/>";
	echo $pais."<br/>";
	echo $DateRegistro."<br/><br/>";

	$arrayIdioma = $_POST["Idioma"];
	$arrayNivelHablado = $_POST["NivelHablado"];
	$arrayNivelEscrito = $_POST["NivelEscrito"];
 
	// Registro Date para usar en las dos tablas y porder posteriormente relacionarlas
	$DateRegistro = date("Y-m-d H:i:s"); 


    // Conectamos con MySQL por medio de mysqli de modo que no tengamos problemas con los acentos y ñ, etc.
    $link = new mysqli("localhost","root","root","Arreglo");
    if (mysqli_connect_errno()) {
            die("Error al conectar: ".mysqli_connect_error());
        }
    // $link->set_charset("utf8");
	$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente


    // Guardamos base dedatos los valores de variables de Nombres.  
    $result = mysqli_query($link, "INSERT INTO Nombres (NombreBD, ApellidosBD, PaisBD, DateRegistroBD) VALUES ('$nombre', '$apellidos', '$pais', '$DateRegistro')");
    if(!$result)  //la variable que inserta a la base de datos.
	   echo "No se pudieron registrar los datos";



    // Guardamos todos los datos.  
	$i=0;
	while($i < count($arrayIdioma)) {
	   echo $arrayIdioma[$i]." - ".$arrayNivelHablado[$i]." - ".$arrayNivelEscrito[$i]." - ".$DateRegistro."<br>"; 

	   $sql = "INSERT INTO Idiomas (IdiomaBD, NivelHabladoBD, NivelEscritoBD, DateRegistroBD) VALUES ('$arrayIdioma[$i]', '$arrayNivelHablado[$i]', '$arrayNivelEscrito[$i]', '$DateRegistro')";
	   $result = mysqli_query($link,  $sql);
    	if(!$result)  //la variable que inserta a la base de datos.
	       echo "No se pudieron registrar los datos";	   
	   $i++; 
	}

    // Libero la memoria asociada a result y cierro base de datos
    mysqli_free_result($result);
    // Cierra la conexión con la base de datos 
    $close = mysqli_close($link) 
        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

?>

<div>
   <!-- Volver apantalla inicial -->
   <br><br>
    <input class="btn btn-default" type="button" value="Volver al menú principal" onclick="location.href='AddCamposJavascript.php'">
    <br><br>

   <!-- Leer la base de datos -->
   <br><br>
    <input class="btn btn-default" type="button" value="Leer la base de datos" onclick="location.href='LeerArregloBaseDatos.php'">
    <br><br>
</div>
    
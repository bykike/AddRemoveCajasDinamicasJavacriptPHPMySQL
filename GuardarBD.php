<?php

    echo "<script> alert('Entrada a conexión')</script>"; // debug

    
    // Se conecta al SGBD 
    if(!($iden = mysql_connect("localhost", "root", "root"))) 
    die("Error: No se pudo conectar");
	
    // Selecciona la base de datos 
    if(!mysql_select_db("Usuario", $iden)) 
    die("Error: No existe la base de datos");

    //Pase de variables.  
    $Idioma=$_POST["Idioma"."1"];   
    $NivelHablado=$_POST["NivelHablado"."1"];   
    $NivelEscrito=$_POST["NivelEscrito"."1"];

    $sql= "INSERT INTO Idiomas (IdiomaBD, NivelHabladoBD, NivelEscritoBD) VALUES ('$Idioma', '$NivelHablado', '$NivelEscrito');";  //se insertan los datos en una variable llamada sql.


    if(!mysql_query($sql))  //la variable que inserta a la base de datos.
        echo "No se pudieron registrar los datos";
    else
        echo "<center>El registro se ha realizado satisfactoriamente<br><br> <b>Nombre:</b>".$Idioma." <br> <b>Apellidos:</b>".$NivelHablado."<br> <b>No. control:</b>".$NivelEscrito." "; 


?>
    <br><br>
    <form>
        
        <input Type="button" VALUE="Back" onClick="history.go(-1);return true;">
        
    </form>

<?
    // Cierra la conexión con la base de datos 
    mysql_close($iden); 
    // echo "<script> alert('Salida de conexión')</script>"; // debug
?>

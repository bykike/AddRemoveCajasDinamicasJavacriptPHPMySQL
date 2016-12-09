<?php

    echo "<script> alert('Entrada a conexión')</script>"; // debug

    

    # Conectamos con MySQL por medio de mysqli de modo que no tengamos 
    # problemas con los acentos y ñ, etc.
        $link = new mysqli("localhost","root","root","ARREGLO");
        if (mysqli_connect_errno()) {
            die("Error al conectar: ".mysqli_connect_error());
        }
        $link->set_charset("utf8");
	


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
    // Libero la memoria asociada a result y cierro base de datos
    mysqli_free_result($result);
    // Cierra la conexión con la base de datos 
    $close = mysqli_close($link) 
        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
?>

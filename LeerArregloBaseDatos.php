<html>
<head>
    <title>Leer registros</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    
     <style type="text/css">

         table, td {
                width: 60%;
                background-color:#f0f0f0; 
                font-family:verdana; 
                font-size:90%;
                border: 1px solid black;
                padding: 10px;
                border-spacing: 10px;
                border-collapse: separate;
         }
         
         h1 {
                font-family: Arial, Helvetica, sans-serif;
                font-style: normal;
                color:purple;
                text-align:center;
                font:20px;
         }
         
    </style>
    

    
</head>
    <body>

		<?php

		    // Conectamos con MySQL por medio de mysqli de modo que no tengamos problemas con los acentos y ñ, etc.
		    $link = new mysqli("localhost","root","root","Arreglo");
		    if (mysqli_connect_errno()) {
		            die("Error al conectar: ".mysqli_connect_error());
		        }
		    // $link->set_charset("utf8");
			$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

			

			//$consulta_mysql="select * from Nombres where CategoriasInteres like '%" .$_POST[CategoriasInteres]. "%' and Pais like '%" .$_POST[Pais]. "%'";
			$consulta_mysql="select * from Nombres";

		    $resultado_consulta_mysql=mysqli_query($link, $consulta_mysql);
		            
		    while (($fila = mysqli_fetch_array($resultado_consulta_mysql))!=NULL){
		    		echo $fila['idUserBD']." ".$fila['NombreBD']." ".$fila['ApellidosBD']." ".$fila['PaisBD']." ".$fila['DateRegistroBD']."<br>";
		           /* printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",         
		                     $fila['NombreBD'], $fila['ApellidosBD'], $fila['PaisBD'], $fila['DateRegistroBD']);
					*/
		           }


		    # Libero la memoria asociada a result y cierro base de datos
		    mysqli_free_result($resultado_consulta_mysql);
		    mysqli_close($link);

		?>

	</body>
</html>
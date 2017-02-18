<html>
<head>
    <title>Leer registros</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    
     <style type="text/css">

         table, td, th {
                width: 100%;
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
		    // Conectamos con MySQL.
		    $link = new mysqli("localhost","root","root","Arreglo");
		    if (mysqli_connect_errno()) {
		            die("Error al conectar: ".mysqli_connect_error());
		        }
			$tildes = $link->query("SET NAMES 'utf8'"); // Para que se muestren las tildes correctamente

			$consulta_mysql="SELECT * FROM Nombres, Idiomas where Nombres.DateRegistroBD = Idiomas.DateRegistroBD";
		    $resultado_consulta_mysql=mysqli_query($link, $consulta_mysql);
		?>
		     
			<table>
				<tr>
		          <th>Nombre</th>
		          <th>Apellidos</th>
				  <th>País</th>
				  <th>Date Registro</th>

				  <th>Idioma</th>
		          <th>Nivel Hablado</th>
				  <th>Nivel Escrito</th>
				  <th>Date Registro</th>
		        </tr>
			    <?
			    while (($fila = mysqli_fetch_array($resultado_consulta_mysql))!=NULL){
			    ?>
			    	<tr>
			    	  <!-- Muestra campoos de Nombres -->
			          <td><?php echo $fila['NombreBD']?></td>
			          <td><?php echo $fila['ApellidosBD']?></td>
			          <td><?php echo $fila['PaisBD']?></td>
			          <td><?php echo $fila['DateRegistroBD']?></td>

			          <!-- Muestra campoos de Idiomas -->
			          <td><?php echo $fila['IdiomaBD']?></td>
			          <td><?php echo $fila['NivelHabladoBD']?></td>
			          <td><?php echo $fila['NivelEscritoBD']?></td>
			          <td><?php echo $fila['DateRegistroBD']?></td>
			        </tr>
			    <?
			        }

			    # Libero la memoria asociada a result y cierro base de datos
			    mysqli_free_result($resultado_consulta_mysql);
			    mysqli_close($link);

				?>

      		</table> 
	</body>
</html>
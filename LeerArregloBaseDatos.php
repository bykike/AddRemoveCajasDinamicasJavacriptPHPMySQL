<!DOCTYPE html>
<html lang="en">
<head>
    <title>Leer registros de la base de datos</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/docs.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <style type="text/css">
     
    </style>

    
</head>
    <body>
    <div class="container">
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
		     
			<div class="row show-grid">

		          <div class="col-md-1">Nombre</div>
		          <div class="col-md-1">Apellidos</div>
				  <div class="col-md-1">País</div>
				  <div class="col-md-1">Date Registro</div>

				  <div class="col-md-1">Idioma</div>
		          <div class="col-md-1">Nivel Hablado</div>
				  <div class="col-md-1">Nivel Escrito</div>
				  <div class="col-md-1">Date Registro</div>

			</div>
			    <?
			    while (($fila = mysqli_fetch_array($resultado_consulta_mysql))!=NULL){
			    ?>
					<div class="row show-grid">

					    	  <!-- Muestra campos de Nombres -->
					          <div class="col-md-1"><?php echo $fila['NombreBD']?></div>
					          <div class="col-md-1"><?php echo $fila['ApellidosBD']?></div>
					          <div class="col-md-1"><?php echo $fila['PaisBD']?></div>
					          <div class="col-md-1"><?php echo $fila['DateRegistroBD']?></div>

					          <!-- Muestra campos de Idiomas -->
					          <div class="col-md-1"><?php echo $fila['IdiomaBD']?></div>
					          <div class="col-md-1"><?php echo $fila['NivelHabladoBD']?></div>
					          <div class="col-md-1"><?php echo $fila['NivelEscritoBD']?></div>
					          <div class="col-md-1"><?php echo $fila['DateRegistroBD']?></div>

					</div>
			    <?
			        }

			    # Libero la memoria asociada a result y cierro base de datos
			    mysqli_free_result($resultado_consulta_mysql);
			    mysqli_close($link);

				?>
    </div>
	</body>
</html>
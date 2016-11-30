<html>
    
    <head>  
    <TITLE>Muestra los resultados de una consulta MySQL.</TITLE>  
    </head>  

    <body>  
            <div align='center'>  
              <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>  
                <tr>  
                  <td width='150' style='font-weight: bold'>IDIOMA</td>  
                  <td width='150' style='font-weight: bold'>NIVEL HABLADO</td>  
                  <td width='150' style='font-weight: bold'>NIVEL ESCRITO</td>  
                  <td width='150' style='font-weight: bold'></td>  
                </tr>  
            <?php  
                // Se conecta al SGBD 
                if(!($iden = mysql_connect("localhost", "root", "root"))) 
                die("Error: No se pudo conectar");

                // Selecciona la base de datos 
                if(!mysql_select_db("Usuario", $iden)) 
                die("Error: No existe la base de datos");


                $query = "select * from Idiomas";     // Esta linea hace la consulta 
                $result = mysql_query($query);  
                while ($registro = mysql_fetch_array($result)){  
                echo "  
                <tr> 
                  <td width='150'>".$registro['IdiomaBD']."</td>  
                  <td width='150'>".$registro['NivelHabladoBD']."</td>  
                  <td width='150'>".$registro['NivelEscritoBD']."</td>  
                  <td width='150'></td>  

                </tr>  
                ";  

                }  
            // Cierra la conexión con la base de datos 
              mysql_close($iden); 
            // echo "<script> alert('Salida de conexión')</script>"; // debug  
            ?>  
               </table>  
            </div>  
    </body>  

</html> 
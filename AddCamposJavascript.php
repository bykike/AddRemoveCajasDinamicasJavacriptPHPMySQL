<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>

        <meta charset="UTF-8">
        <title>Trabaja con nosotros</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>

        <link rel="stylesheet" href="css/normalize.css">
        <!-- <link rel="stylesheet" href="css/style.css"> -->
  
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> -->
    <script src="jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {

            $("#parrafo").text("Datos Personales"); // Escribo la cabecera en el id al cargar la web

            $('#btnAdd').click(function() {
                var num     = $('.clonedInput').length; // Cuántos campos de entrada "duplicables" que tenemos actualmente
                var newNum  = new Number(num + 1);      // Se agrega el ID numérico del nuevo campo de entrada
 
                // crear el nuevo elemento via clone(), y manipulo si el ID usa nuevo valor
                var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);
 
                // Manipular los valores de nombre / id de la entrada dentro del nuevo elemento
                newElem.children(':first').attr('id', 'idioma' + newNum).attr('idioma', 'idioma' + newNum);
 
                // Inserto el nuevo elemento después del último campo de entrada "duplicable"
                $('#input' + num).after(newElem);
 
                // Habilito el botón de remove
                $('#btnDel').attr('disabled','');
 
                // Regla de negocio: sólo puede agregar 10 nombres
                if (newNum == 10)
                    $('#btnAdd').attr('disabled','disabled');
            });
 
            $('#btnDel').click(function() {
                var num = $('.clonedInput').length; // Cuántos campos duplicados de entrada tengo
                $('#input' + num).remove();     // Quitamos el último elemento
 
                // Habilito el boton add
                $('#btnAdd').attr('disabled','');
 
                // Si sólo queda un elemento, desactivo el botón "Eliminar"
                if (num-1 == 1)
                    $('#btnDel').attr('disabled','disabled');
            });
 
            $('#btnDel').attr('disabled','disabled');

        });
    </script>
</head>
 
<body>

<div class="container">
  
        <!-- ##########################################################
        ## Sección Datos Personales
        ########################################################### -->

        <div id="parrafo"></div>

         <form id="myForm" action="leerArregloyMostar.php" method="POST">       
         
                    <div class="row">
                      <div class="col-sm-4">
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="Nombre" placeholder="Escriba su nombre" required>
                      </div>
                      <div class="col-sm-4">
                            <label for="Apellidos">Apellidos</label>
                            <input type="text" name="Apellidos" placeholder="Escriba sus apellidos">
                      </div>
                      <div class="col-sm-4">
                    <label for="País">País</label>
                    <select class="entradaTxt" name="Pais" data-placeholder="Seleccione país" tabindex="-1" aria-hidden="true" >
                            <option value="" class="selected">Seleccione país</option>
                            <option value="España">España</option>
                            <option value="Otro">Otro</option>
                    </select>
                      </div>
                    </div>

              
            <table>
                
                <tr>
                  <td width="120px"><strong>Idioma</strong></td>
                  <td width="100px"><strong>Nivel hablado</strong></td>
                  <td width="110px"><strong>Nivel escrito</strong></td>
                </tr>
                
            </table>

            <div id="input1" style="margin-bottom:4px;" class="clonedInput">
                
                <select class="entradaTxt" name="Idioma[]" data-placeholder="Seleccione Idioma" tabindex="-1" aria-hidden="true" required>
                            <option value="" class="selected">Seleccione Idioma</option>
                            <option value="Inglés">Inglés</option>
                            <option value="Francés">Francés</option>
                            <option value="Alemán">Alemán</option>
                            <option value="Otros">Otros</option>
                </select> 
                
                <select class="entradaTxt" name="NivelHablado[]" data-placeholder="Seleccione Idioma" tabindex="-1" aria-hidden="true" required>
                            <option value="" class="selected">Nivel hablado</option>
                            <option value="Nativo">Nativo</option>
                            <option value="Bilingue">Bilingue</option>
                            <option value="Alto">Alto</option>
                            <option value="Medio">Medio</option>
                            <option value="Bajo">Bajo</option>
                </select>        
                
                <select class="entradaTxt" name="NivelEscrito[]" data-placeholder="Seleccione Idioma" tabindex="-1" aria-hidden="true" required>
                            <option value="" class="selected">Nivel escrito</option>
                            <option value="Nativo">Nativo</option>
                            <option value="Bilingue">Bilingue</option>
                            <option value="Alto">Alto</option>
                            <option value="Medio">Medio</option>
                            <option value="Bajo">Bajo</option>
                </select>        
                
            </div>
                         
            <br>
            <br>
            
            <div>
                <input type="button" id="btnAdd" value="Añadir Experiencia" />
                <input type="button" id="btnDel" value="Quitar Experiencia" />        
            </div>
            
            <br>
            <br>
            
            <input type="submit" value="Enviar MySQL" />
        </form>
 
</div>
</body>
</html>

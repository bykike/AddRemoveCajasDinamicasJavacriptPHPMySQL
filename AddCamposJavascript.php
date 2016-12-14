<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>

        
        <meta charset="UTF-8">
        <title>Trabaja con nosotros</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
  
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script> -->
    <script src="jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btnAdd').click(function() {
                var num     = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
                var newNum  = new Number(num + 1);      // the numeric ID of the new input field being added
 
                // create the new element via clone(), and manipulate it's ID using newNum value
                var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);
 
                // manipulate the name/id values of the input inside the new element
                newElem.children(':first').attr('id', 'idioma' + newNum).attr('idioma', 'idioma' + newNum);
 
                // insert the new element after the last "duplicatable" input field
                $('#input' + num).after(newElem);
 
                // enable the "remove" button
                $('#btnDel').attr('disabled','');
 
                // business rule: you can only add 10 names
                if (newNum == 10)
                    $('#btnAdd').attr('disabled','disabled');
            });
 
            $('#btnDel').click(function() {
                var num = $('.clonedInput').length; // cuantos campos duplicados de entrada tengo
                $('#input' + num).remove();     // quitamos el último elemento
 
                // enable the "add" button
                $('#btnAdd').attr('disabled','');
 
                // if only one element remains, disable the "remove" button
                if (num-1 == 1)
                    $('#btnDel').attr('disabled','disabled');
            });
 
            $('#btnDel').attr('disabled','disabled');
        });
    </script>
</head>
 
<body>
  
        <!-- ##########################################################
        ## Sección Datos Personales
        ########################################################### -->
           
          <p>Datos Personales</p>

        
 
          <p class="left entradaTxt">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" placeholder="Escriba su nombre" required>
          </p>
            
          <p class="entradaTxt">
            <label for="Apellidos">Apellidos</label>
            <input type="text" name="Apellidos" placeholder="Escriba sus apellidos">
          </p>
            
          <p class="entradaTxt">
            <label for="País">País</label>
            <select class="entradaTxt" name="Pais" data-placeholder="Seleccione país" tabindex="-1" aria-hidden="true" >
                    <option value="" class="selected">Seleccione país</option>
                    <option value="España">España</option>
                    <option value="Otro">Otro</option>
            </select>
          </p>

      
    <table>
        
        <tr>
          <td width="120px"><strong>Idioma</strong></td>
          <td width="100px"><strong>Nivel hablado</strong></td>
          <td width="110px"><strong>Nivel escrito</strong></td>
        </tr>
        
    </table>
    
<form id="myForm" action="leerArregloyMostar.php" method="POST">
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
 
</body>
</html>

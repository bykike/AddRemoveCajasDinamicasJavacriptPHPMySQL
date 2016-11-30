<?php

    // database para exportar a csv
    $db_record = 'Idiomas';
    // optional where query
    $where = 'WHERE 1 ORDER BY 1';
    // filename for export
    $csv_filename = 'db_export_'.$db_record.'_'.date('Y-m-d').'.csv';
    // database variables
    $hostname = "localhost";
    $user = "root";
    $password = "root";
    $database = "Usuario";
    // Database connecten voor alle services
    mysql_connect($hostname, $user, $password)
    or die('No se puede conectar: ' . mysql_error());

    mysql_select_db($database)
    or die ('No se ha conectado a la base de datos ' . mysql_error());
    // Creo una variable vacia para ser rellenada en la exportación de los datos
    $csv_export = '';
    // query para coger los datos de la base de datos
    $query = mysql_query("SELECT * FROM ".$db_record." ".$where);
    $field = mysql_num_fields($query);
    // Creo línea con el nombre de los datos
    for($i = 0; $i < $field; $i++) {
      $csv_export.= mysql_field_name($query,$i).';';
    }
    // nueva linea (parece que trabaja con ambos servidores en servidores linux y windows)
    $csv_export.= '
    ';
    // loop hasta rellenar la variable que se exportará
    while($row = mysql_fetch_array($query)) {
      // create line with field values
      for($i = 0; $i < $field; $i++) {
        $csv_export.= '"'.$row[mysql_field_name($query,$i)].'";';
      }	
      $csv_export.= '
    ';	
    }
    // Exporto los datos y promt el fichero csv para la descarga
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=".$csv_filename."");
    echo($csv_export);

?>
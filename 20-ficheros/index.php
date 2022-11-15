<?php

    //Abrir archivo
    $archivo = fopen("fichero.txt", "r");

    //Leer contenido
    while (!feof($archivo)) {
        $contenido = fgets($archivo);
        echo $contenido;
    }
    


    //Cerrar archivo
    fclose($archivo);

    

    //copiar fichero
    copy('fichero.txt' , 'fiechero_copiado.txt') 
    or die("Error al copiar");
?>
<?php

    //Crear Carpeta
    if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta' , 0777) or die
    ('No se puede crear la carpeta');
    }else{
        echo"Ya existe la carpeta";
    }


    //Borrar carpeta
    //rmdir('mi_carpeta');

    if($gestor = opendir('./mi_carpeta')){
        while(false !== ($archivo = readdir($gestor))){
            echo $archivo;
        }
    }

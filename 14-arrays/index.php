<?php include ("../modulos/header.php"); ?>
    <div>
        <h1>Funciones!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
        <hr>
        <div class="container">
            <p>
                <li>Un array, es un tipo de dato estructurado que permite almacenar un conjunto de datos homogeneo, es
                    decir, todos ellos del mismo tipo y relacionados. Cada uno de los elementos que componen un vector
                    pueden ser de tipo simple como caracteres, entero o real, o de tipo compuesto o estructurado como
                    son vectores, estructuras, listas...<br>
                </li>
            </p>            
        </div>
        <hr>
    </div>
</body>

</html>

<!-- INICIO PHP -->

<?php

    $pelicula= "Batman";
    $peliculas = array('Batman' , 'Spider' , 'lord' , 'superman');

    var_dump($peliculas[3]);
    
    echo ($peliculas[2]);
 
    $cantantes = ['Batman' , 'Spider' , 'lord' , 'superman'];

    //Orden alfabetico
    sort($peliculas);
    var_dump($peliculas);

    //Orden inverso
    arsort($peliculas);
    var_dump($peliculas); 

?>
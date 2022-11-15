<?php include ("modulos/header.php"); ?>
    <div class="container">
        <h1>Ejercicio1!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
        <hr>
        <div>
            <p>
                <li>Hacer un programa en PHP que tenga un array con 8 numeros enteros<br>
                y haga lo siguiente:<br>              
                <ul>
                    <li>Recorrerlo y mostrarlo</li>
                    <li>Ordenarlo y mostrarlo</li>
                    <li>Mostrar su longitud</li>
                    <li>Buscar algun elemento</li>
                </ul>
            </li>
            </p>
            <hr>
        </div>
    </div>
</body>

</html>

<!-- INICIO PHP -->

<?php


    $numeros = array(11,44,55,77,23,9,97,67);

    //Recorrer y mostrarlo
    echo "<h1>Recorrer y mostrar</h1>";

    foreach ($numeros as $numero) {
        echo $numero."</br>";
    }

 
?>

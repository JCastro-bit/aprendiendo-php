<?php include ("../modulos/header.php"); ?>
    <h1>Variables!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
    <hr>
    <div>
        <p>Existen las variables Locales y Globales. <br>
            Locales: Se definen dentro de una funcion y no pueden
            ser usadas fuera de la funcion, solo disponibles dentro
            a no ser que yo haga un return. <br>
            Globales: estan declaradas fuera de la funcion y estan 
            disponibles dentro y fuera de la función.
        </p>
        <hr>
</body>

</html>

<!-- INICIO PHP -->

<?php
    
    //Variable local
    $frase = "Ni los genios son tan genios , ni los mediocres tan mediocres";

    echo $frase ;

    function holamundo(){
        global $frase;
        echo $frase;

        $year = 2019;
        echo "<h4>$year</h4>";

    }

    holamundo();

    //Funciones Variables

    function buenosdias(){
        return "Hola ! buenos días";
    }

    function buenostardes(){
        return "Hola ! buenas tardes";
    }

    function buenosnoches(){
        return "Hola ! buenas noches";
    }

    $horario = "tardes";
    $mi_funcion = "buenos".$horario;
    echo $mi_funcion();



 
?>
<?php include ("../modulos/header.php"); ?>
    <div>
        <h1>Sesions!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
        <hr>
        <div class="container">
            <p>
                <li>Sesion: Almacenar y persistir datos del usuario mientras
                    navega en un sitio web hasta que cierra sesion o cierra<br>
                    el navegador
                </li>
            </p>
            <hr>
        </div>
    </div>
</body>

</html>


<?php

/*
Sesion: Almacenar y persistir datos del usuario mientras
navega en un sitio web hasta que cierra sesion o cierra
el navegador
*/


//Iniciar la sesion
session_start();

$variable_normal= "Soy una cadena de texto";

//Variable de session
$_SESSION['variable_persistente']= "Hola soy una sesion activa";


echo $variable_normal. "<br>";
echo $_SESSION['variable_persistente']. "<br>";

?>
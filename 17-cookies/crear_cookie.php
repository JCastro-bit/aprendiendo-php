<?php include ("../modulos/header.php"); ?>
    <div>
        <h1>Cookies!<a role="button" class="btn btn-primary" href="index.php">Regresar</a></h1>
        <hr>
        <div class="container">
            <p>
                <li>Las cookies son archivos creados por los sitios web que visitas y la caché de tu navegador, la cual
                    ayuda a que las páginas se carguen más rápido. Te permiten navegar más fácilmente por la web"
                    <br> con el fin de recordar datos , informacion y comportamiento.                    
                </li>
            </p>            
        </div>
        <hr>
    </div>
</body>

</html>


<?php

/*
Sesion: Almacenar y persistir datos del usuario mientras
navega en un sitio web hasta que cierra sesion o cierra
el navegador
*/


//Iniciar la cookie
//setcookie("nombre" , "valor que solo puede ser texto" , caducidad , ruta , dominio );

setcookie("micookie" , "valor de mi galleta");


//Cookie con expiracion
setcookie("unyear" , "valor de mi cookie de 365 dias" , time()+(60*60*24*365));


?>

<a href="ver_cookies.php">Ver las galletas</a>
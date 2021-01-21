<?php

/*
Para mostrar el valor de las cookies, tengo que usar &_COOKIE 
una variable superglobal disponible en todas las paginas,ya
que es un array asociativo
*/

if (isset($_COOKIE['micookie'])) {
    echo "<h1>" .$_COOKIE['micookie']. "</h1><br>";
}else{
    echo "No existe la coookie";
}


if (isset($_COOKIE['unyear'])) {
    echo "<h1>" .$_COOKIE['unyear']. "</h1><br>";
}else{
    echo "No existe la coookie";
}
?>

<a href="borrar_cookies.php">Borrar cookies</a>
<a href="crear_cookie.php">Crear cookies</a>
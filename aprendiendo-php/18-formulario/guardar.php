<?php

    if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
        echo"<h1>".$_POST['titulo']."<br>";
        echo $_POST['descripcion']. "</h1>";
    }

?>
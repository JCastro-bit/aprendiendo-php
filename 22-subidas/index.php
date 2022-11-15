<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Subidas!</title>
</head>

<body>
    <h1>Subir archivos al servidor!</h1>
    <hr>
    <div class="container">
        <p>
            <li>Subir diferentes archivos al servidor para almacenarlos.<br>
            </li>
        </p>
    </div>
    <hr>
    <div class="container">
        <li>
            <a role="button" class="btn btn-primary" href="ejercicio1.php">Ejercicio 1</a>
        </li>
        <li>
            <a role="button" class="btn btn-primary" href="ejercicio2.php">Ejercicio 2</a>
        </li>
        <li>
            <a role="button" class="btn btn-primary" href="ejercicio3.php">Ejercicio 3</a>
        </li>
        <li>
            <a role="button" class="btn btn-primary" href="ejercicio4.php">Ejercicio 4</a>
        </li>
        <li>
            <a role="button" class="btn btn-primary" href="ejercicio5.php">Ejercicio 5</a>
        </li>
        <li>
            <a role="button" class="btn btn-primary" href="ejercicio6.php">Ejercicio 6</a>
        </li>
    </div>
    <hr>
    <div class="container">
    <h2>Formulario para subir imagenes al servidor!</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data" >
            <div class="mb-3">
                <label for="archivo" class="form-label">Seleccione archivo:</label>
                <input type="file"  name="archivo">                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
    <hr>
    <div class="container">
        <h2>Listado de imagenes</h2>
        <?php
        
            $gestor = opendir('./images');
            if($gestor){
                while (($image = readdir($gestor)) !== false) {
                    if($image != '.' && $image != '..'){
                       echo"<img class='card-img-top' src='images/$image' width='100px'/>"; 
                    }
                }
            }

        ?>
    </div>
</body>

</html>

<!-- INICIO PHP -->

<?php


 
?>
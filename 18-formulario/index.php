<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Formularios!</title>
</head>

<body>
    <h1>Formularios!</h1>
    <hr>
    <div class="container">
        <p>
            <li>Recopilan informacion y la almacenan en el servidor
                quidem cum possimus eaque autem. Beatae, dicta sed? Esse aut ullam ipsam ducimus, nam qui deserunt.<br>
            </li>
        </p>
    </div>
    <hr>
    <div class="container">


        <li>
            <a role="button" class="btn btn-primary" href="formulario.html">Ejercicio 1</a>
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
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" autofocus="autofocus" maxlength="25">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" name="apellido" class="form-control" maxlength="25">
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="sexo">Sexo:</label>
                <p>
                    Hombre<input type="checkbox" name="sexo" value="hombre" />
                    Mujer<input type="checkbox" name="sexo" value="mujer" />
                </p>
            </div>
            <div class="mb-3">
                <label for="color" class="form-color">Color:</label>
                <input type="color" name="color" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control">
            </div>
            <div class="mb-3">
                <label for="Email1" class="form-label">Email address</label>
                <input type="email" class="form-control" id=" Email1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="archivo">Archivo:</label>
                <input type="file" name="archivo" multiple="multiple">
            </div>
            <div class="mb-3">
                <label for="numero">Numero:</label>
                <input type="number" name="numero" class="form-control">
            </div>
            <div class="mb-3">
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraeña" class="form-control">
            </div>
            <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>

<!-- INICIO PHP -->

<?php


 
?>
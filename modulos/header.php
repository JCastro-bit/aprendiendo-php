<?php
    $host = $_SERVER['HTTP_HOST'];
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Aprendiendo PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->


    <link rel="apple-touch-icon" sizes="57x57"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo $protocol . $host; ?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo $protocol . $host; ?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo $protocol . $host; ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="<?php echo $protocol . $host; ?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo $protocol . $host; ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $protocol . $host; ?>/assets/favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $protocol . $host; ?>/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Metatags -->

    <meta property="og:url" content="<?php echo $protocol . $host; ?>">
    <meta name="description"
        content="Aprende PHP con el Máster en PHP, donde cubrimos PHP 8, bases de datos MySQL, SQL, maquetación web, POO, MVC, librerías y frameworks como Laravel, Symfony y WordPress. Adquiere habilidades full-stack.">
    <meta property="og:title" content="Máster en PHP - Aprende PHP y Desarrollo Web Full-Stack">
    <meta property="og:image" content="<?php echo $protocol . $host; ?>/assets/img/aprendiendo-php.jpg">
    <meta property="og:type" content="website">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo $protocol . $host; ?>/assets/style.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/2237d5d0c6.js" crossorigin="anonymous"></script>

</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="<?php echo $protocol . $host; ?>"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="<?php echo $protocol . $host; ?>\assets\img\logo-php.png" width="200" alt="logo-php" />
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="<?php echo $protocol . $host; ?>" class="nav-link active"
                    aria-current="page">Home&nbsp;<i class="fa-solid fa-house"></i></a></li>
            <li class="nav-item"><a href="https://github.com/JCastro-bit/aprendiendo-php" class="nav-link">Github&nbsp;<i class="fa-brands fa-github"></i></a>
            </li>
        </ul>
    </header>
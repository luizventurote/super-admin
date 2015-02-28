<!doctype html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <title>Painel Super Admin</title>
        <meta name="description" content="Painel do sistema">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icons -->
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Style -->
        <link rel="stylesheet" href="css/style.min.css">

        <!-- Modernizr -->
        <script src="lib/js/modernizr.js"></script>

    </head>
    <body>

        <header class="wrapper top-bar">

            <div class="top-bar-brand">

                <div class="menu-icon" id="menu-toggle"></div>
                
                <div class="top-bar-item">
                    <?php include('ui/logo.php') ?>
                </div>

            </div>

            <div class="top-bar-nav">

                <?php include('ui/dropdown.php') ?>

            </div>

        </header>

        <main>

            <div class="wrapper page" id="page">

                <?php include('ui/menu.php') ?>

                <div class="content" id="content">
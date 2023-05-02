<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/signup.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-3">
            <div class="container">
                <a class="navbar-brand" href="#">Projeto PHP</a>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-center ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>

                        <?php
                            if (isset($_SESSION["userUsername"])) {
                                echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Perfil</a></li>";
                                echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Sair</a></li>";
                            } else {
                                echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Cadastrar</a></li>";
                                echo "<li class='nav-item'><a class='nav-link' href='login.php'>Entrar</a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
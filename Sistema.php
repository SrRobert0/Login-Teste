<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        unset($_SESSION['usuario']);
        header('Location: Login.php');
    } else {
        $logado = $_SESSION['usuario'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
    <style> 
        body {
            background-image: linear-gradient(90deg, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }

        a {
            background: red;
            color: white;
            text-decoration: none;
            padding: 10px;
            padding-right: 20px;
            padding-left: 20px;
            margin-left: 94%; 
            border-radius: 10px;
        }

        a:hover {
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a href="Login.php">Sair</a>
</nav>
<br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>"
    ?>
</body>
</html>
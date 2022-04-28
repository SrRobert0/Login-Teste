<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style> 
    body {
        font-family: Arial, helvetica, sans-serif;
        background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        text-align: center;
        color: white;
    }

    .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 30px;
        border-radius: 10px;
    }

    a {
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        border-radius: 10px;
        padding: 10px;
    }

    a:hover {
        background-color: dodgerblue;
    }
    </style>
</head>
<body> 
    <h1>Opam meu</h1>
    <h2>Robertão da Massa</h2>
    <div class="box">
        <a href="Login.php">Login</a>
        <a href="Registro.php">Cadastre-se</a>
    </div>
</body>
</html>
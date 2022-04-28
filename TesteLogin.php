<?php 
session_start();

    //print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

        include_once('Banco.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*
        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha ' . $senha);
        */

        $sql = "SELECT usuario, email, senha FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        $registro = mysqli_fetch_array($result);

        $usuario = $registro['usuario'];

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['usuario']);
            header('Location: Login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['usuario'] = $usuario;
            header('Location: Sistema.php');
        }

    } else {
        header('Location: Login.php');
    }
?>
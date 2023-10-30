<?php

include "conexao.php";

// Iniciar a sessão (se já não estiver iniciada)
session_start();

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM dados WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conn->query($sql);
    if ($resultado->num_rows==1) {
        $usuario = $resultado->fetch_assoc();
        session_start();
        // Definir uma variável de sessão para indicar que o usuário está logado
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $usuario['nome'];

        header('Location: perfil.php');
        
        exit();
    } else {
        // Exibir a mensagem de erro apenas quando o login falhar
        echo "<script>alert('Email ou senha incorretos. Por favor, tente novamente.');";
        echo "window.location='index.html';</script>";
    }
?>
<?php
    include "conexao.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $checkEmailQuery = "SELECT * FROM dados WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

if ($result->num_rows > 0) {
    // Email já cadastrado, exiba uma mensagem de erro
    echo "<script>alert('Este email já está cadastrado. Por favor, use outro email.');";
    echo "window.location='cadastro.html';</script>";
} else {
    // insira os dados no banco de dados
    $sql = "INSERT INTO dados (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['email'] = $email;
        header('Location: login.html');
    } else {
        echo "<script>alert('Ocorreu um erro ao cadastrar. Tente novamente.');";
        echo "window.location='cadastro.html';</script>";
    }
}

?>







<?php
include "conexao.php";

// Iniciar a sessão (se já não estiver iniciada)
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Se o usuário não estiver logado, exiba a mensagem e redirecione
    echo "Realize o login para acessar a página de publicação";
    exit();
} else {
    $nomeAnimal = $_POST['nomeAnimal'];
    $descricao = $_POST['descricao'];
    $loc = $_POST['loc'];
    $telefone = $_POST['telefone'];
    $imagem = $_FILES["foto"]["tmp_name"];

    // Ler a imagem em modo binário
    $imagemBinaria = file_get_contents($imagem);

    // Preparar a consulta SQL com placeholders
    $sql = "INSERT INTO procurados (nomeAnimal, descricao, loc, telefone, foto) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nomeAnimal, $descricao, $loc, $telefone, $imagemBinaria);

    // Executar a consulta
    if ($stmt->execute()) {
        echo "Descrição e imagem salvas no banco de dados com sucesso.";
    } else {
        echo "Erro ao salvar a descrição e a imagem no banco de dados: " . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    header("Location: procurados.php");
}

// Fechar a conexão após o uso
$conn->close();
?>

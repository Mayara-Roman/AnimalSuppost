<?php
include "conexao.php";  // Certifique-se de incluir o arquivo de conexão com o banco de dados

// Consulta para obter dados da tabela
$sql = "SELECT * FROM denuncia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Construir o corpo do e-mail com os dados da tabela
    $message = "Dados da tabela:\n\n";
    while ($row = $result->fetch_assoc()) {
        $message .= "ID: " . $row["id"] . "\n";
        $message .= "Crime: " . $row["crime"] . "\n";
        $message .= "Animal: " . $row["animal"] . "\n";
        $message .= "Frequência: " . $row["frequencia"] . "\n";
        $message .= "Descrição: " . $row["descricaoCrime"] . "\n";
        $message .= "Cidade: " . $row["cidade"] . "\n";
        $message .= "Bairro: " . $row["bairro"] . "\n";
        $message .= "Rua: " . $row["rua"] . "\n";
        $message .= "Descrição: " . $row["descricaoLoc"] . "\n";

    }

    // Destinatário e assunto
    $to = "mayaraalvesroman@gmail.com";
    $subject = "Dados da Tabela";

    // Cabeçalhos adicionais
    $headers = "From: mayaraalvesroman@gmail.com";

    // Enviar o e-mail
    mail($to, $subject, $message, $headers);

    echo "E-mail enviado com sucesso.";
} else {
    echo "Nenhum dado encontrado na tabela.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

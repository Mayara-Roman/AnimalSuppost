<?php
include "conexao.php";

// Certifique-se de que os índices estão definidos e, se não estiverem, defina valores padrão
$crime = isset($_POST["crime"]) ? $_POST["crime"] : '';
$animal = isset($_POST["animal"]) ? $_POST["animal"] : '';
$frequencia = isset($_POST["frequencia"]) ? $_POST["frequencia"] : '';
$descricaoCrime = isset($_POST["descricaoCrime"]) ? $_POST["descricaoCrime"] : '';
$cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : '';
$bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : '';
$rua = isset($_POST["rua"]) ? $_POST["rua"] : '';
$descricaoLoc = isset($_POST["descricaoLoc"]) ? $_POST["descricaoLoc"] : '';

// Inserir dados no banco de dados
// Se 'id' é autoincrementado, você pode omiti-lo da lista de colunas
$sql = "INSERT INTO denuncia (crime, animal, frequencia, descricaoCrime, cidade, bairro, rua, descricaoLoc)
        VALUES ('$crime', '$animal', '$frequencia', '$descricaoCrime', '$cidade', '$bairro', '$rua', '$descricaoLoc')";


if ($conn->query($sql) === TRUE) {
    header('Location: denunciaRealizada.php');
    
} else {
    echo "<script> alert ('Há campos vazios');";
    echo "window.location='denuncia.php';</script>";
}


?>

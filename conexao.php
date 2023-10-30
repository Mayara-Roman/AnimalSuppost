<?php
    $banco = "teste";
    $usuario = "root";
    $senha = "Roman0610!Mayara";
    $hostname = "localhost";
    $conn = new mysqli ($hostname,$usuario,$senha);
    if ($conn->connect_error) {
        die ("Não foi possível conectar ao banco MySQL. " . $conn->connect_error);
    }
    

    mysqli_select_db($conn, $banco);
?>
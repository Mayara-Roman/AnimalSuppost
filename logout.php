<?php
    // Iniciar a sessão (se já não estiver iniciada)
    session_start();

    // Encerrar a sessão
    session_unset();
    session_destroy();

    // Redirecionar para a página de login ou outra página desejada
    header('Location: site.php');
    exit();
?>
<?php
// Iniciar a sessão (se já não estiver iniciada)
session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
      include "navbar.php";
    ?>
    <section class="home">
        <div class="banner">
                <video autoplay loop muted src="https://cdn.coverr.co/videos/coverr-kitten-yawning-488/1080p.mp4"></video>
                <div class="texto">
                <div class="overlay-text">
                  <h1>Bem-vindo ao Animal Support!</h1>
                  <h3>Oferecendo apoio para todos os animais</h3>
          
                <div class="botoes">
                    <a href="saibaMais.php"><button class="overlay">Sabia mais</button></a>
                </div>
        </div>
        </section>
    <script src="js/main.js"></script>
    
</body>
</html>
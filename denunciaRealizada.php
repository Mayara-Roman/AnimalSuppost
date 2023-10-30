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
    <style>
    body{
        background-color: black;
    }
    .denuncia h1{
        color: #fff;
        text-align: center;
        font-size: 40px;
        

    }
    .denuncia h2{
        color: #e1efcc;
        text-align: center;
        font-size: 30px;
        
    }

    
    </style>
</head>
<body>
<?php
      include "navbar.php";
    ?>
    
    <section class="denuncia">
    <div class="container">
        <h1>OBRIGADO REALIZAR A DENÚNCIA!</h1>
            <h2>Sua denúncia foi encaminhada a delegacia municípal paara que provídencias sejam tomadas.</h2><br>
          
    </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>
<?php
  // Iniciar a sessão (se já não estiver iniciada)
  include "conexao.php";
  session_start();
  $procurados = "SELECT * FROM procurados";
  $resultado = $conn->query($procurados);

  if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Se o usuário não estiver logado, redirecione para a página de login
    header('Location: index.html');
    exit();
}
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
    <section class="adocao">
      <div class="container">
        <h1>Ajude a encontrar esse animal</h1>
        <p>Esses animais precisam voltar para casa</p>
        <div class="cards-container">

        <?php
            // Loop para exibir os registros da tabela adocao
            while ($row = $resultado->fetch_assoc()) {              
              $idProcurados = $row["id"];
              $nomeAnimal = $row["nomeAnimal"];
              $descricao = $row["descricao"];
              $localizacao = $row["loc"];
              $cell = $row["telefone"];
              $imagemBinaria = $row["foto"];
        ?>
          <div class="card-item">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($imagemBinaria); ?>" alt="Animais">
            <p class="nome">
              <?php echo $nomeAnimal; ?>
            </p>
            <p class="informacao-animal">
              <?php echo $descricao; ?>
            </p>
          
            <p class="informacao-animal">
              Contato: 
             <span style="color: #0097B2;"><?php echo $cell; ?>
            </p>
          </div>
        <?php
            }
        ?>
        </div>

    
    <div class="publi-icons">
     <a href="publicacaoProcurados.php" id="publi-button"><i class="material-icons">add_circle</i></a> 
    </div>
        </div>
    </section>
    <!-- Seu código de rodapé -->
    <script src="js/main.js"></script>
</body>
</html>
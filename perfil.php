<?php
// Iniciar a sessão (se já não estiver iniciada)
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Se o usuário não estiver logado, redirecione para a página de login
    header('Location: login.html');
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
    <title>PERFIL</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
      include "navbar.php";
    ?>
<section class="vh-100" style="background-color: #FFF2E7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <div class="perfil" >
                    <i class="material-icons">account_circle</i>
                </div>
                <div class="informacao">
                <h5>
                  <?php echo $_SESSION['nome']; 
                  ?>
                </h5>
                <p>
                  <?php echo $_SESSION['email']; 
                  ?>
                </p>
</div>
                <form action="logout.php" method="post">
                  <div class="botoes">
                    <button class="logout" type="submit">Logout</button>
                  </div>
                </form>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/main.js"></script>
</body>
</html>
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
    <title>AnimalSupport/saibaMais</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
<?php
      include "navbar.php";
    ?>
    <section class="saibaMais">
        <div class="container">
                <div class="itens-textos">
                <video autoplay loop muted src="https://cdn.coverr.co/videos/coverr-horses-on-a-misty-farm-5500/1080p.mp4"></video> 
                <h1>ANIMAL SUPPORT - O QUE É?</h1>
                  <div class="text">
                  <p class="informacao-animal"><br>
                  Um site para auxiliar no
                  mapeamento de animais vulneráveis no município de Quedas do
                  Iguaçu.
                  O processo de urbanização acelerada traz grandes consequências ao
                  meio ambiente, afetando diretamente todas as espécies de animais. Em
                  Quedas do Iguaçu, Paraná, não existe o controle populacional de animais
                  vulneráveis e também não há a presença de campanhas para divulgação de
                  informações às comunidades do município. 
                  Com este projeto espera-se que o abandono de animais possa ser
                  minimizado, conscientizando a população sobre uma questão de saúde pública
                  e ambiental muito presente nas cidades, posto que é um problema que
                  prejudica a vida do animal e a sociedade.
                  </p> <br><br> <br>
                </div>
                  <h1>ANIMAL SUPPORT - DÚVIDAS SOBRE O SITE.</h1> <br><br>
                  <div class="card-item"><br>
                  <h2> Adoção e Publicação: </h2> <br>
                  <p class="informacao-animal">
                    Ao acessar a pagina de adoção você pode visualizar os animais que estão para adoção,
                    caso tenha interesse em realizar uma publicação deve clicar no botão localizado no inferior da pagina no canto direito. 
                    Você só pode realizar a publicação caso possua cadastro no site, caso contrario quando clicar no botão para publicação 
                    será diceionado para a pagina de login.
                    Na página para realizar a publicação você deve fornecer informações sobre o animal, como, a espécie do animal, fornecer
                    uma foto, a cor, a raça, a idade, o motivo da publicação e o comportamento do animal, 
                    para o usuario que visualizar posso saber mais sobre o animais. 
                    Também ao realizar a publicação você deve fornecer o telefone para contato 
                     (o número do telefone só ficará visivel para usuários cadastrados no site) e os dados do endereço
                     (que não seram publicados no site).<br><br>
                     A página de publicação segue o mesmo padrão da página de publicação. Na página você pode realizar a publicação de um animal 
                     procurado ou ajudar alguém a encontrar o seu animal que está perdido.
                  </p><br>
                  </div>
                  <div class="card-item"><br>
                  <h2>Informações:</h2>
                  <p class="informacao-animal">
                    Na página de informações você pode ler sobre a importância do bem estar animal,
                    informações sobre o município de Quedas do Iguaçu - Paraná, e os animais presentes nele. 
                  </p><br>
                  </div>
                  <div class=card-infos>
                  <div class="card-item-info"><br>
                  <h2>Denúncia:</h2>
                  <p class="informacao-animal">
                    Na página de denúncia você pode observar os direitos dos animais 
                    a importância de realizar uma denúncia de maus tratos e orientações de como realizar a denúncia.
                  </p><br>
                  </div>
                  <div class="card-item-info"><br>
                  <h2>Formulário de denúncia:</h2>
                  <p class="informacao-animal">
                    No formulário você pode informar os dados da denúncia que é realizado de maneira anônima, esses dados seram 
                    encaminhados ao poder municípal de Quedas do Iguaçu.
                  </p><br>
                  </div>
                  </div>
                  <div class=card-infos>
                  <div class="card-item-info"><br>
                  <h2>Cadastro:</h2><br>
                  <p class="informacao-animal">
                    O cadastro pode ser realizado acessando o ícone de perfil na barra de navegação,
                    o usuário deve informar seu nome, email e criar uma senha.
                  </p><br>
                  </div>
                  <div class="card-item-info"><br>
                    <h2>Login:</h2><br>
                    <p class="informacao-animal">
                      O usuário é direcionado a página de login assim que realizar o cadastro. Ele deve informar 
                      o email e a senha cadastrado no site. 
                    </p><br>
                  </div>
                </div>
                <div class="card-item"><br>
                  <h2>Perfil:</h2><br>
                  <p class="informacao-animal">
                    Após realizar o cadastro e o login o usuário pode visualizar seu perfil.
                    Com seu nome e email, na página o usuário também pode realizar o logout. 
                  </p><br>

                </div>
                
    
        </section>
        <section class="cntt" id="contato">
        <div class="container-cntt">
        <div class="contact-us">
        <h1>ANIMAL SUPPORT - CONTINUA COM DÚVIDAS?</h1><br>
        <p class="informacao-animal">
          Deixe sua duvida ou sujestam no formulário a seguir.
        </p><br>
            <form action="saibaMais.php" method="post">
              <input type="text" name="nome" placeholder="Seu nome" required>
              <input type="email" name="email" id="" placeholder="E-mail" required>
              <input type="" name="assunto" placeholder="Sobre o que se trata?" required>
              <textarea name="message" id="message" cols="30" rows="20" placeholder="Sua mensagem aqui" required></textarea>
              <input type="submit" name="mensagem" value="Enviar" class="btn">
            </form>
        </div>

        
      </div>
      </div>
    
        <script src="js/main.js"></script>
    </body>
    </html>

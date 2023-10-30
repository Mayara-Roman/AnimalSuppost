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

    <section class="adocao">
        <div class="container"><br><br>
            <h1>INFORMAÇÕES</h1>
            <div class="itens-textos">
                <div class="texto"><br>
                    <h2>Quedas do Iguaçu - Paraná</h2>
                    <p class="informacao-animal"><br>
                    Em Quedas do Iguaçu, existe uma organização não governamental (ONG),
                    Amigo Focinho, voltado a proteção dos animais, ela está voltada a ajudar em
                    determinados fatores: o resgate deles, ou seja, com a retirada dos que estão em situação
                    de risco nas ruas e com o processo de adoção desses mesmos animais, por pessoas que
                    prometem oferecer a eles toda a segurança e proteção que precisam. A
                    Amaqi, uma página do Facebook, que busca realizar alguns fatores como abrigos para
                    animais abandonados, o desenvolvimento de campanhas de conscientização sobre
                    maus-tratos animais, campanhas para adoção de animais e campanhas para vacinação de
                    animais, presente no município.
                    </p>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57641.18228454285!2d-52.948203144615825!3d-25.452505601890188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f1cdcebdea1cb3%3A0xf1c377fabf0f1192!2sQuedas%20do%20Igua%C3%A7u%2C%20PR%2C%2085460-000!5e0!3m2!1spt-BR!2sbr!4v1698617202194!5m2!1spt-BR!2sbr" 
                      width="100%" height="500" style="border:0; border-radius: 14px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <br>
                </div>
                <div class="conteudo-imagem-texto">
                  <img src="https://cdn.pixabay.com/photo/2020/05/05/18/30/capybara-5134409_1280.jpg" alt="capivara">
                <div class="texto-1">
                    <h2>Bem-estar animal</h2><br>
                    <p class="informacao-animal">
                    A maneira como tratamos os animais reflete nossos valores como sociedade.
                     Promover o cuidado adequado, alimentação, abrigo e tratamento médico para os animais demonstra nossa consideração por 
                     suas vidas e seu direito a uma existência livre de sofrimento.<br>
                     A saúde pública e o meio ambiente são afetados pelo abandono, pois provoca
                    problemas à fauna animal e principalmente as comunidades sem controle populacional
                    de animais e centros zoonoses. Entende-se pela Lei Nº 12.916, de 16 de abril de 2008,
                    que a falta desses cuidados podem causar problemas à população humana, com
                    impactos à saúde pública, pois possibilita transmissões de doenças.
                    A conservação da biodiversidade também depende do bem-estar animal. 
                    Muitas espécies estão ameaçadas de extinção devido à degradação de seus habitats naturais e à caça predatória. 
                    Proteger o bem-estar dos animais selvagens é fundamental para a sobrevivência de muitas espécies e para 
                    a manutenção do equilíbrio dos ecossistemas.
                    </p>
                    
                  </div>
                
                </div>
        </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>
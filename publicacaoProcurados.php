<?php
    // Iniciar a sessão (se já não estiver iniciada)
    session_start();

	if(!isset($_SESSION['email'])) {
		header("Location: login.html");
		exit();
	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/denuncia.css">
        <title>PUBLICAÇÃO</title>
    </head>

<body>
               
    <form method="post" action="publiProcurados.php" enctype="multipart/form-data">
        <h1>Publicação Procurados</h1>
        
        
    <fieldset>
          
        <legend><span class="number">1</span> Informe dados sobre o animal</legend>
          
            <label for="text">Tipo de de animal: *</label>
            <input type="text" id="nomeAnimal" name="nomeAnimal" placeholder="Ex: Cachorro" required>
          
            <label for="text">Faça uma descrição do animal: *</label>
            <textarea type="text" id="descricao" name="descricao" placeholder="Ex: Motivo da publicação - cor do animal - Idade - Raça - Comportamento " required></textarea>
          
            <label for="text">Escolha uma foto do animal: *</label>
            <input type="file" name="foto" id="foto" required>

        <legend><span class="number">2</span> Informe os dados da localização</legend>

                    <label for="text">Endereço: *</label>
                    <input type="text" id= "loc" name="loc" placeholder="Ex: Cidade-Bairro-Rua" required>

        <legend><span class="number">3</span> Informe os dados para contato</legend>

                    <label for="text">Telefone: *</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Ex: (00) 00000-0000" required>



    </fieldset>
        <button type="submit">PUBLICAR</button>
            </form>
    </form>
    <script src="js/main.js"></script>
</body>
</html>
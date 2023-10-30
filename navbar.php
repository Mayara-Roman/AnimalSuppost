<header style="background-color:  #C4D7A4">
        <div class="container">
            <nav>
                <a href="site.php">
                    <img src="img/logo - Copia.png" alt="Logo">
                </a>
                <ul class="ul">
                <a href="site.php">HOME</a>
                    <a href="adocao.php">ADOÇÃO</a>
                    <a href="procurados.php">PROCURADOS</a>
                    <a href="informacao.php">INFORMAÇÕES</a>
                    <a href="denuncia.php">DENÚNCIA</a>
                    <a href="<?php echo isset($_SESSION['logado']) && $_SESSION['logado'] ? 'perfil.php' : 'login.html'; ?>"><i class="material-icons">person</i></a>
                    <div class="closed-icon" onclick="closeMenu()">
                        <i class="material-icons">closed</i>
                    </div>
                </ul>
                <div class="menu-icon" onclick="openMenu()">
                    <i class="material-icons">menu</i>
                </div>
                
            </nav>
        </div>     
    </header>

<!--================== HEADER ==================-->
<header>
    <nav class="navbar">
        <div class="nav-menu">
            <div class="logo">
                <a href="/Site/principal/"><img src="/public/assets/svg/Logo.svg" style="width: 150px;margin-left: 100%;" alt="Echo"></a>
            </div>
            <div class="burger"><img src="/public/assets/svg/burg.svg"></div>
            <?php
                $REQUEST_URI = ($_SERVER["REQUEST_URI"]);
                $url = explode("/",$REQUEST_URI);

                $nome_controller = $url[1];
                $nome_action = $url[2];
            ?>
            <ul class="nav-list">
                <li><a href="/Veiculos/index/" id="hover-left" class="nav-link" <?php if($nome_controller=="Veiculos") echo "style='background-color:#6D995D; color: white; border-bottom-left-radius: 40px;border-top-left-radius: 40px;'";?>>Veiculos</a></li>
                <li><a href="/Funcionarios/index" <?php if($nome_controller=="Funcionarios") echo "style='background-color:#6D995D; color:white;'";?> class="nav-link">Funcionários</a></li>
                <li><a href="/Chamados/index/" <?php if($nome_controller=="Chamados") echo "style='background-color:#6D995D; color:white;'";?> class="nav-link">Chamados</a></li>
                <li><a href="/Relatorios/index/" id="hover-right" <?php if($nome_controller=="Relatorios") echo "style='background-color:#6D995D; color:white;border-bottom-right-radius: 40px;border-top-right-radius: 40px;'";?> class="nav-link">Relatórios</a></li>
            </ul>
        </div>
            <a href="/Usuarios/logout/" class="btnAcessar">Sair</a>

    </nav>
</header>
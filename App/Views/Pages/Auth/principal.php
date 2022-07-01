<?php include("header.php");?>
<?php include("Element/nav-menu-autenticado.php");?>

<?php
if (@$_SESSION["msgLoginSucesso"] == true) {
    ?>
        <div class="notification is-success">
                <p style="color: green; text-align: center; text-decoration: underline; margin-top: 5vh;">Bem vindo <strong><?php echo $_SESSION["usuario"]["razao_social"];?></strong></p>
            </div>
    <?php
    $_SESSION["msgLoginSucesso"] = false;
}
?>
    <!--================== CONTAINER ==================-->
    <div class="container-principal">
        <div class="card-principal">
            <div class="card-image">
                <img src="/public/assets/img/imgveiculo.png">
            </div>
            <h3 class="name">Veiculos</h3>
            <p class="comment">
                Liste e organize os veículos de sua empresa  
                com eficácia e de maneira simples.
            </p>
            <a href="/Veiculos/index/" class="btngerenciamento" style="margin-top: 59px;">Gerenciar</a>
        </div>
        <div class="card-principal">
            <div class="card-image">
                <img src="/public/assets/img/imgfuncionarios.png">
            </div>
            <h3 class="name">Funcionarios</h3>
            <p class="comment">
                Liste e organize os funcionários que utilizam 
                suas frotas de carro, para que sua empresa seja 
                mais organizada.
            </p>
            <a href="/Funcionarios/index/" class="btngerenciamento">Gerenciar</a>
        </div>
        <div class="card-principal">
            <div class="card-image">
                <img src="/public/assets/img/imgchamados.png">
            </div>
            <h3 class="name">Chamados</h3>
            <p class="comment">
                Gerencie em chamados qual funcionário utilizou qual 
                veículo, para que assim sua empresa tenha total controle 
                administrativo.
            </p>
            <a href="/Chamados/index/" class="btngerenciamento">Gerenciar</a>
            
        </div>
    </div>
    <a href="/Relatorios/index/" class="btnrelatorio">Relatorios</a>
    <?php include("wave.php");?>
    

<?php include("footer.php");?>

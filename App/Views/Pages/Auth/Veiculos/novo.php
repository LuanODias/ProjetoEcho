<?php
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/Element/nav-menu-autenticado.php");
?>


<h1 class="title">Cadastro de <?php echo $vars["nameController"];?></h1>


<form action="/<?php echo $vars["nameController"]; ?>/novo" method="POST">
    <section class="formulario">
        <div class="inputs">
            <div class="input-row">
                <label for="">Placa</label>
                <input pattern="^([^0-9]{3}-[0-9][A-Za-z0-9][0-9][0-9])" onkeyup="validarPlaca(this)"  autocomplete="off" id="placa" name="placa" type="text" minlength="8" maxlength="8" required placeholder="Digite uma Placa para cadastrar na tabela">

                <label for="">Marca</label>
                <input autocomplete="off" name="marca" type="text" required placeholder="Digite uma Marca para cadastrar na tabela">
            </div>

            <div class="input-row">
                <label for="">Modelo</label>
                <input autocomplete="off" name="modelo" type="text" required placeholder="Digite um Modelo para cadastrar na tabela">

                <label for="">Autonomia</label>
                <input autocomplete="off" name="autonomia" type="number" style="appearance: textfield;" required placeholder="Digite uma Autonomia para cadastrar na tabela">
            </div>
        </div>
        <div class="row-center">
            <input type="submit" value="Salvar" class="btncrud" />
            <a style="color: white;" href='/<?php echo $vars["nameController"]; ?>/index'><span class="btncrud">
                    Voltar</span></a>
        </div>
    </section>
</form>

<img style="z-index: -1;" src="/public/assets/svg/Wave.svg" alt="Wave" class="wavecarbono">
<script src="/App/Views/Pages/Auth/validacoes.js"></script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/footer.php"); ?>
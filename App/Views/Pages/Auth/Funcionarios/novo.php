<?php
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/Element/nav-menu-autenticado.php");
?>

<h1 class="title">Cadastro de <?php echo $vars["nameController"];?></h1>

<form action="/<?php echo $vars["nameController"];?>/novo" method="POST">
    <section class="formulario">
        <div class="inputs">
            <div class="input-row">
                <label for="">Nome</label>
                <input autocomplete="off" name="nome" type="text" required placeholder="Digite o nome para cadastrar na tabela">

                <label for="">Cpf</label>
                <input id="cpf" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})" onkeypress="$(this).mask('000.000.000-00')" name="cpf" type="text" autocomplete="off" minlength="14" maxlength="14" required placeholder="Digite o cpf para cadastrar na tabela">
            </div>
        </div>
        <div class="row-center">
            <input type="submit" value="Salvar" class="btncrud" />
            <a style="color: white;" href='/<?php echo $vars["nameController"];?>/index'><span class="btncrud">Voltar</span></a>
        </div>       
    </section>
</form>
<img style="z-index: -1;" src="/public/assets/svg/Wave.svg" alt="Wave" class="wavecarbono">
<script src="/public/assets/js/jquery-3.6.0.slim.min.js"></script>
<script src="/public/assets/js/jQueryMask/dist/jquery.mask.min.js"></script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/footer.php"); ?>
<?php
if (@$_SESSION["msgAdicionadoSucesso"] == true) {
    ?>
    <span class="msg-success">
            <p style="text-align: center; color: green; text-decoration: underline">Adicionado com sucesso!</p>
        </span>
    <?php
    $_SESSION["msgAdicionadoSucesso"] = false;
}
?>

<?php
if (@$_SESSION["msgAlteradoSucesso"] == true) {
    ?>
    <span class="msg-success">
            <p style="text-align: center; color: green; text-decoration: underline">Alterado com sucesso!</p>
    </span>
    <?php
    $_SESSION["msgAlteradoSucesso"] = false;
}
?>

<?php
if (@$_SESSION["msgRemovidoSucesso"] == true) {
    ?>
    <span class="msg-success">
        <p style="text-align: center; color: green; text-decoration: underline">Excluído com sucesso!</p>
    </span>
    <?php
    $_SESSION["msgRemovidoSucesso"] = false;
}
?>

<?php
if (@$_SESSION["msgAdicionadoErro"] == true) {
    ?>
    <span class="msg-error">
        <p style="text-align: center; color: red; text-decoration: underline">Falha no cadastro! Campo já existente.</p>
    </span>
    <?php
    $_SESSION["msgAdicionadoErro"] = false;
}
?>

<?php
if (@$_SESSION["msgAlteradoErro"] == true) {
    ?>
    <span class="msg-error">
            <p style="text-align: center; color: red; text-decoration: underline">Houve algum problema na alteração!</p>
        </span>
    <?php
    $_SESSION["msgAlteradoErro"] = false;
}
?>

<?php
if (@$_SESSION["msgRemovidoErro"] == true) {
    ?>
    <span class="msg-error">
            <p style="text-align: center; color: red; text-decoration: underline">Falha ao excluir! Verifique se há algum chamado aberto</p>
        </span>
    <?php
    $_SESSION["msgRemovidoErro"] = false;
}
?>



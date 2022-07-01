<?php include("header.php"); ?>
<?php include("Element/nav-menu-login.php"); ?>
<section class="container">
    <div class="container-account">
        <div class="container-left">
            <h1>Registre-se Gratuitamente</h1>
            <p>gerencie sua empresa pensando verde!</p>

            <?php
            if (!empty($_SESSION["msgAdicionadoSucesso"]) && $_SESSION["msgAdicionadoSucesso"] == true) {
            ?>
                <span class="msg-success">
                    <p style="color: green; text-decoration: underline;">Cadastro realizado com sucesso!</p>
                </span>
            <?php
                $_SESSION["msgAdicionadoSucesso"] = false;
            }
            ?>

            <?php
            if (!empty($_SESSION["msgAdicionadoErro"]) &&  $_SESSION["msgAdicionadoErro"] == true) {
            ?>
                <span class="msg-error">
                    <p style="color: red; text-decoration: underline">Erro! O usuário já existe</p>
                </span>
            <?php
                $_SESSION["msgAdicionadoErro"] = false;
            }
            ?>


            <form action="/Usuarios/novo" method="POST">
                <input type="hidden" value="novo" name="tiporequisicao">
                <div class="format">
                    <div class="first-row">
                        <div class="column">
                            <label for="cnpj">CNPJ</label>
                            <input pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})" id="cnpj" name="cnpj" onkeypress="$(this).mask('00.000.000/0000-00')" type="text" autocomplete="off" minlength="18" maxlength="18" required>
                        </div>

                        <div class="column">
                            <label for="razao_social">Razão Social</label>
                            <input name="razao_social" type="text" required>
                        </div>
                    </div>
                    <div class="second-row">
                        <div class="column">
                            <label for="email">Endereço de e-mail</label>
                            <input name="email" type="email" required>
                        </div>
                        <div class="column">
                            <label for="senha">Senha</label>
                            <input name="senha" type="password" required>
                        </div>
                    </div>
                </div>

                <div class="button">
                    <button type="submit" class="btncadastro">Cadastre-se já</button>
                    <p>Ao criar uma conta, você declara que possui mais de 16 anos de idade e está de acordo com os <a href="/#" style="color: blue;">Termos de Serviço</a> & <a href="/#" style="color: blue;">Política de Privacidade</a>.</p>
                </div>
        </div>
    </form>

    <form action="/Usuarios/login" method="POST">
        <input type="hidden" value="login" name="tiporequisicao">
        <div class="container-login">
            <div class="linha"></div>
            <span class="menu-login">
                <h1 style="margin-top: -1vh;">Iniciar sessão</h1>
                <p>Já possui uma conta? Faça login aqui embaixo.</p>
                <?php
                if (!empty($_SESSION["msgLoginErro"]) && $_SESSION["msgLoginErro"] == true) {
                ?>
                    <span class="msg-error">
                        <p style="color: red; text-decoration: underline;">Email ou senha incorretos!</p>
                    </span>
                <?php
                    $_SESSION["msgLoginErro"] = false;
                }
                ?>
                <div class="input-login">
                    <div class="login-row">
                        <div class="row">
                            <label for="usuarui">Email</label>
                            <input name="email" name="text" class="input is-large" autofocus="">
                        </div>
                        <div class="row">
                                <label for="senha" id="password">Senha</label>
                            <input name="senha" class="input is-large" type="password">
                        </div>
                    </div>
                    <div class="buttonlogin">
                    <button type="submit" class="btnlogin" value="Iniciar sessão" >Iniciar sessão</button>
                        <p>Problemas para entrar na sua conta? Certifique que seu navegador está com Javascript e cookies habilitados.</p>
                    </div>
                </div>
        </div>
        </div>
    </form>
    </div>
</section>
<?php include("wave.php");?>
<script src="../../../public/assets/js/jquery-3.6.0.slim.min.js"></script>
<script src="../../../public/assets/js/jQueryMask/dist/jquery.mask.min.js"></script>
<?php include("footer.php"); ?>
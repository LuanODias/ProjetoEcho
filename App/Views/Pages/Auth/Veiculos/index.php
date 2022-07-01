<?php
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/Element/nav-menu-autenticado.php");
?>


<section class="formulario">


    <h1 class="title" style="float: left;margin-left: 42%"><?php echo $vars["nameController"];?> <a href="/<?php echo $vars["nameController"];?>/novo"></h1>
    <span><img style="width:3%!important;display: unset!important;align-items: center;margin-left: 20px;margin-top: 25px;" src="/public/assets/svg/AddVeic.svg" alt=""></a></span>

        <!--<h1 class="title" style="display: block;margin-left:auto;margin-right: auto;">Veículos</h1>
        <a href="/App/Views/Pages/Auth/Veiculos/novo.php"><img id="svgadd" src="/public/assets/svg/AddVeic.svg"></a>
-->


    <br><br><br><br>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/Element/msg.php");?>


    <form action="/<?php echo $vars["nameController"];?>/index" method="POST">
        <input type="hidden" name="acao" value="buscar">
        <div class="inputs">
            <div class="input-row">
                <label for="">Placa</label>
                <input pattern="^([^0-9]{3}-[0-9][A-Za-z0-9][0-9][0-9])" onkeyup="validarPlaca(this)"  autocomplete="off" id="placa" name="placa" type="text" minlength="8" maxlength="8" placeholder="Digite uma Placa para cadastrar na tabela">

                <label for="">Marca</label>
                <input autocomplete="off" name="marca" type="text" placeholder="Digite uma Marca para pesquisar na tabela">
            </div>
            <div class="input-row">
                <label for="">Modelo</label>
                <input autocomplete="off" name="modelo" type="text" placeholder="Digite um Modelo para pesquisar na tabela">

                <label for="">Autonomia</label>
                <input autocomplete="off" name="autonomia" type="text" placeholder="Digite uma Autonomia para pesquisar na tabela">
            </div>
        </div>
        <span class="inputs"><input type="submit" value="Pesquisar" class="btncrud" /></span>


    </form>

    <?php if (!empty($vars["getData"])) { ?>
        <table>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Autonomia</th>
                <th></th>
            </tr>
            <?php
            foreach ($vars["getData"] as $linha) : ?>
                <tr>
                    <td><?php echo $linha["placa"]; ?></td>
                    <td><?php echo $linha["marca"]; ?></td>
                    <td><?php echo $linha["modelo"]; ?></td>
                    <td><?php echo $linha["autonomia"]; ?></td>
                    <td>
                        <div class="ud">
                            <a href='/<?php echo $vars["nameController"]; ?>/alterar/<?php echo $linha["id"]; ?>'><img style="width: 56px; height: 56px;" src="/public/assets/svg/edit.svg" alt=""></a>
                            <a href='/<?php echo $vars["nameController"]; ?>/excluir/<?php echo $linha["id"]; ?>' onclick="javascript:return confirm('Tem certeza que deseja excluir?')"><img style="width: 45px; height: 45px;" src="/public/assets/svg/remove.svg"></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach;
            ?>

        </table>
    <?php } else { ?>
        <h3 style="text-align: center; font-size: 30px; color: #6D995D;">Resultado da busca: Nenhum resultado cadastrado</h3>
    <?php } ?>
</section>
<img style="z-index: -1;" src="/public/assets/svg/Wave.svg" alt="Wave" class="wavecarbono">
<script src="/App/Views/Pages/Auth/validacoes.js"></script>
</body>

</html>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/Element/nav-menu-autenticado.php");
?>


    <section class="formulario">


    <h1 class="title" style="float: left;margin-left: 38%"><?php echo $vars["nameController"];?> <a href="/<?php echo $vars["nameController"];?>/novo"></h1>
    <span><img style="width:3%!important;display: unset!important;align-items: center;margin-left: 20px;margin-top: 20px;" src="/public/assets/svg/AddFunc.svg" alt=""></a></span>
    <br><br><br><br>

    <?php include($_SERVER["DOCUMENT_ROOT"]."/App/Views/Pages/Auth/Element/msg.php");?>

    <form action="/<?php echo $vars["nameController"];?>/index" method="POST">
        <input type="hidden" name="acao" value="buscar">
        <div class="inputs">
            <div class="input-row">
                <label for="">Nome</label>
                <input autocomplete="off" name="nome" type="text" placeholder="Digite uma Nome para pesquisar na tabela">

                <label for="">CPF</label>
                <input autocomplete="off" onkeypress="$(this).mask('000.000.000-00')"  name="cpf" type="text" minlength="14" maxlength="14" placeholder="Digite uma Cpf para pesquisar na tabela">
            </div>
        </div>
        <span class="inputs"><input type="submit" value="Pesquisar" class="btncrud"/></span>
    </form>

    <?php if (!empty($vars["getData"])) {?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th></th>
            </tr>
            <?php
            foreach ($vars["getData"] as $linha) : ?>
                <tr>
                    <td><?php echo $linha["nome"]; ?></td>
                    <td><?php echo $linha["cpf"]; ?></td>
                    <td>
                        <div class="ud">
                        <a style="pointer-events: no;" href='/<?php echo $vars["nameController"];?>/alterar/<?php echo $linha["id"]; ?>'><img style="width: 56px; height: 56px;" src="/public/assets/svg/edit.svg" alt=""></a>
                        <a href='/<?php echo $vars["nameController"];?>/excluir/<?php echo $linha["id"]; ?>' onclick="javascript:return confirm('Tem certeza que deseja excluir?')"><img style="width: 45px; height: 45px;" src="/public/assets/svg/remove.svg"></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach;
            ?>

        </table>
    <?php } else { ?>
        <h3 style="text-align: center; font-size: 30px; color: #6D995D;">Resultado da busca: Nenhum registro cadastrado</h3>
    <?php } ?>
    </section>
    <img style="z-index: -1;" src="/public/assets/svg/Wave.svg" alt="Wave" class="wavecarbono">

    <script src="/public/assets/js/jquery-3.6.0.slim.min.js"></script>
    <script src="/public/assets/js/jQueryMask/dist/jquery.mask.min.js"></script>
</body>
</html>
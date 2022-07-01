<?php
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/App/Views/Pages/Auth/Element/nav-menu-autenticado.php");
?>
<h1 class="title">KM Rodado Veiculo</h1>

<div class="datas">
    <label for="">De </label>
    <input name="data_inicio" type="date" disabled value="<?php echo $vars["getIntervaloData"]["inicio"]; ?>">
    <label for="">Até </label>
    <input name="data_fim" type="date" disabled value="<?php echo $vars["getIntervaloData"]["fim"]; ?>">
</div>


<?php if (!empty($vars["getData"])) { ?>
    <table>
        <tr>
            <th>Data</th>
            <th>Total Km Rodado</th>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Marca</th>
        </tr>
        <?php
        foreach ($vars["getData"] as $linha) : ?>
            <tr>
                <td><?php echo date_format(date_create($linha["data"]), 'd/m/Y'); ?></td>
                <td><?php echo $linha["total_km_rodado"]; ?></td>
                <td><?php echo $linha["placa"]; ?></td>
                <td><?php echo $linha["modelo"]; ?></td>
                <td><?php echo $linha["marca"]; ?></td>
            </tr>
        <?php endforeach;
        ?>

    </table>
<?php } else { ?>
    <h3 style="text-align: center; font-size: 30px; color: #6D995D;">Resultado da busca: Nenhum resultado cadastrado</h3>
<?php } ?>

<div class="row-center">
    <a style="color: white;" href='/<?php echo $vars["nameController"]; ?>/index'><span class="btncrud">Voltar</span></a>
</div>
<img style="z-index: -1;" src="/public/assets/svg/Wave.svg" alt="Wave" class="wavecarbono">
</body>

</html>
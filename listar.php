<script language='javascript'>

function confirmaExclusao(aURL) {

    if(confirm('Você tem certeza que deseja excluir?')) {
    location.href = aURL;
    }
}

</script>
<?php include "../config.inc.php"; ?>
<?php

$sql = "Select * from paginas order by id";

$todos = mysqli_query($conn, $sql);

?>
<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Nome da página</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Exlcuir</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>

    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['titulo'];?></td>
        <td><a href="?pg=alterar&id=<?=$dados['id']; ?>"
        >Alterar</a></td>
        <td><a href="javascript:confirmaExclusao('excluir.php?&id=<?=$dados['id']; ?>')">Excluir</a></td>

    </tr>
    <?php } ?>

</table>
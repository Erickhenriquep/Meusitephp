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



<div class="container text-center">


    <table class="">
        
        <tr class="">
        
            <td class="btn btn-dark" style="width: 205px;">Id</td> 
            <td class="btn btn-dark" style="width: 205px;">Nome da página</td>
            <td class="btn btn-dark" style="width: 205px;">Alterar</td>
            <td class="btn btn-dark" style="width: 205px;">Excluir</td>
            

        </tr>
        <hr>
        <?php while ($dados=mysqli_fetch_array($todos)) {?>
        
        <tr class="">
        
            <td class="btn btn-dark"style="width: 205px;"><?=$dados['id'];?></td>
            <td class="btn btn-dark"style="width: 205px;"><?=$dados['titulo'];?></td>
            <td class="btn btn-dark"style="width: 205px;"><a href="?pg=alterar&id=<?=$dados['id']; ?>"
            >Alterar</a></td>
            <td class="btn btn-dark"style="width: 205px;"><a href="javascript:confirmaExclusao('excluir.php?&id=<?=$dados['id']; ?>')">Excluir</a></td>
            
        </tr>
        <?php } ?>

        

    </table>
    <hr>

</div>
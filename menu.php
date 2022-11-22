
<?php
        include("config.inc.php");
?>

<div class="menu">
    <a href="?pg=conteudo">Home</a>
    <a href="?pg=quemsomos">Quem Somos</a> 
    <?php
        $sql = mysqli_query($conn, "SELECT titulo, link FROM paginas ORDER BY id");
        while($tabela = mysqli_fetch_array($sql)){
        echo "<a href=?pg=$tabela[link]>$tabela[titulo]</a>";
        }
    ?>
    <a href="?pg=contato">Fale conosco</a>
</div>









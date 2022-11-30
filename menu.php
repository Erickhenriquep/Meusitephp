
<?php
        include("config.inc.php");
?>


<div id="menu" class="row">

    <nav class="nav">

        <a href="?pg=conteudo" class="nav-link">Home</a>
        <a href="?pg=quemsomos" class="nav-link">Quem Somos</a> 
        <?php
            $sql = mysqli_query($conn, "SELECT titulo, link FROM paginas ORDER BY id");
            while($tabela = mysqli_fetch_array($sql)){
            echo "<a href=?pg=$tabela[link]>$tabela[titulo] </a>";
            }
        ?>
        <a href="?pg=contato" class="nav-link">Fale conosco</a>

    </nav>

</div>




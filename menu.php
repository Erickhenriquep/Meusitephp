
<?php
   include("config.inc.php");
?>


    <div class="container" id="nav-container">
      <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="?pg=conteudo">
          <a class="navbar-brand " href="?pg=conteudo">Art Music School</a>
        </a>
        <div class="collapse navbar-collapse" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" id="" href="?pg=conteudo">Home</a>
            <a class="nav-item nav-link active" id="" href="?pg=quemsomos">Quem Somos</a>
            <a class="nav-item nav-link active" id="" href="?pg=contato">Fale Conosco</a>
            <a class="nav-item nav-link active" id="" href="">
            <?php
                $sql = mysqli_query($conn, "SELECT titulo, link FROM paginas ORDER BY id");
                while($tabela = mysqli_fetch_array($sql)){ 
                echo "<a href=?pg=$tabela[link]>$tabela[titulo]</a>";
                } 
            ?>
            </a>
          </div>
        </div>
      </nav>
    </div>
  
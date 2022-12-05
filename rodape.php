<div id="rodape" class="container-fluid ">
    <ul class="nav justify-content-center">
      <li id="rodapenav"class="nav-item">
        <a href="?pg=conteudo"class="nav-link active ">Home</a>
      </li>
      <li id="rodapenav" class="nav-item">
        <a href="?pg=quemsomos"class="nav-link active">Quem Somos</a>
      </li>
      <li id="rodapenav" class="nav-item">
          <?php
            $sql = mysqli_query($conn, "SELECT titulo, link FROM paginas ORDER BY id");
            while($tabela = mysqli_fetch_array($sql)){ 
            echo "<a href=?pg=$tabela[link]>$tabela[titulo]</a>";
            } 
            ?>

      </li>
      <li id="rodapenav" class="nav-item">
      <a href="?pg=contato"class="nav-link active">Contato</a>
    </li>
      
    </ul>
    <p id="rodapenav2" class="text-center">&copy; 2022 Art Music School </p>
</div>
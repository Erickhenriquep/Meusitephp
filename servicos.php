<?php

$sql = "SELECT *FROM paginas WHERE id=24";

$todos = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($todos)) {?>

<div class="row featurette" id="servicos">

  <div class="col-md-12 order-md-2">
  <h2 class="featurette-heading fw-normal lh-1"><?=$dados['titulo'];?></h2>
        <p class="lead">
        <?=$dados['descricao'];?>
        </p>
        
  </div>
 

</div> 


<?php } ?>

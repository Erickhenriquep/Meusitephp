<?php

$id =      $_POST['id'];
$nome =    $_POST['titulo'];
$link =    $_POST['link'];
$descricao = $_POST['descricao'];

$sql2 = mysqli_query($conn, "SELECT * FROM paginas 
WHERE id='$id'");

$sql = "UPDATE paginas SET titulo='$nome', link='$link', 
descricao='$descricao' WHERE id=$id";
$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "<h3>Alterado com sucesso!</h3>
<a href='?pg=listar'>Voltar</a>";
}
?>
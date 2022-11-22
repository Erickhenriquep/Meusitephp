
<?php
    include("../config.inc.php");
    include_once("../topo.php");
?>

<h2>Bem Vindo ao Painel Administrativo</h2>

<p>
<a href="?pg=inserir">Inserir nova página</a>
</p>

<?php
#conteudo    
if(empty($_SERVER["QUERY_STRING"])){
    $VAR = "listar.php";
    include_once("$VAR");
}else{
    $pg = $_GET['pg'];
    include_once("$pg.php");     
}
?>

    
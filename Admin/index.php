
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloadmin.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="estiloadmin.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
</head>
<body>
            <?php
                include("../config.inc.php");

                require_once("valida_cookies.php");

                include_once('menuadmin.php');     
            ?>
    
            <?php
            # área de conteúdo
            if(empty($_SERVER["QUERY_STRING"])){
                    $var = "listar.php";
                    include_once("$var");
            }else{
                    $pg = $_GET['pg'];
                    include_once("$pg.php");
            }
            ?>

    <script src="Assets/js/jquery-3.6.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
   
</body>
</html>
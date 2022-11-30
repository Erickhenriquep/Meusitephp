<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Site</title>
        <link rel="stylesheet" href="tilo.css">
         <!-- CSS only -->
        <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    </head>
    <body >

        <div class=" flex-container">
            <?php

            include_once('menu.php');

            include_once('topo.php');

            ?>

            <?php

            //conteudo   
            if(empty($_SERVER["QUERY_STRING"])){
                    $VAR = "conteudo.php";
                    include_once("$VAR");
                    
            }else{
                    $pg = $_GET['pg'];
                    include_once("$pg.php");     
            }
            ?>

            <?php   
            include_once('rodape.php');
            ?>

            <!-- JavaScript Bundle with Popper -->
            <script src="Assets/js/jquery-3.6.1.min.js"></script>
            <script src="Assets/js/popper.min.js"></script>
            <script src="Assets/js/bootstrap.min.js"></script>

        </div>
            
    </body>
    

</html>
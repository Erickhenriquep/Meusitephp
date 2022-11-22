<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO faleconosco(nome,email,cidade,estado,mensagem)

    VALUES('$nome','$email','$cidade','$estado','$mensagem')";

    $insert = mysqli_query($conn,$sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar no banco de dados
        <a href='?pg=contato'> Tente Novamente <a/>";
    }
    else{

        echo "<h3>Cadastrada com sucesso!</h3><br>";
        echo "<a href='?pg=contato'> Cadastrar Novamente </a>,<br>";
    }


?>
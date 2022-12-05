<?php

    require_once("../config.inc.php");

   $login = $_POST['login'];
   $senha = $_POST['senha'];

    if ($login != "erick" || $senha != "1234"){
    echo"<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location
    .href='login.php';</script>";
    }else{
        setcookie("login",$login);
        setcookie("senha",$senha);
        header("Location: index.php");
    }

?>
<?php

    require_once("../config.inc.php");


    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if($login != "admin" && $senha != "senha"){
    echo"<script language='javascript' type='text/javascript'>
    alertt('Login e/ou senha incorretos $login | $senha');window.href='login.php';</script>";
    die();
    
    }
    else{

        setcookie("login",$login);
        setcookie("senha",$senha);

        header("Location:index.php");

    }












?>
<?php session_start();?>
<html>
    <head>
  
    <title>Sistema de Login</title>
</head>
<body>
    <h1> Painel do Sistema</h1>
    <hr>
    <?php
    echo"<br>Seja bem vindo(a)!".$_SESSION["nome"];

    echo"<br>Menu:";
    
    if ($_SESSION["perfil"]=="adm") {
        include_once 'menu_adm.php';
    }else {
        include_once 'menu_usuario.php';
    }
    
    ?>
</body>
</html>

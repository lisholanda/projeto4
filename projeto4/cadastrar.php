<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="gravar.php" method="post">
        <?php include_once 'cabecalho.php';?>
    <h1> Cadastro de Cliente</h1>
    <hr>
    Nome:<br>
    <input type="text" name="nome" placeholder="Digite seu nome" required/>
    <br><br>
    E-mail:<br>
    <input type="text" name="email" placeholder="Digite seu email" required/>
    <br><br>
    Telefone:<br>
    <input type="text" name="telefone" placeholder="Digite seu telefone" required/>
    <br><br>
    <input type="submit" value="Cadastrar"/>
    </form>
<?php include_once 'rodape.php'; ?>
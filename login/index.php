<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <h1> Área Restrita </h1>
    <hr>
    <form action="verificar.php" method="post">
        Login:<br>
        <input type="text" name="login"/>
        <br>
        Senha:<br>
        <input type="password" name="senha"/><br>
        <br>
        <input type="submit" value="Logar"/><br>
    </form>
    <?php
    
    if(isset($_GET["msg"])){
        echo $_GET["msg"];
    }
    
    
    
    ?>
</body>
</html>
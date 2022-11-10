   <?php include_once 'cabecalho.php';?>

   <?php
   $id = $_GET["id"]; //resgate do id enviado pelo link
   include_once './conexao.php';
   $sql = "select *from cliente where idcliente =".$id;

   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);
   ?>

    
    <form action="atualizar.php" method="post">
     
    <h1> Editar Dados do Cliente</h1>
    <hr>
    Nome:<br>
    <input type="text" name="nome" value="<?php echo $row["nome"]; ?>" /> <br>
    <br><br>
    E-mail:<br>
    <input type="text" name="email" value="<?php echo $row["email"]; ?>" /> <br>
    <br><br>
    Telefone:<br>
    <input type="text" name="telefone" value="<?php echo $row["telefone"]; ?>" /> <br>
    <br><br>
    <input type="submit" value="Atualizar"/>
    </form>
<?php include_once 'rodape.php'; ?>
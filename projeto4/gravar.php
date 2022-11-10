<?php 
//passo 1 - pegar os dados da tela
$nome =$_POST["nome"];
$email =$_POST["email"];
$telefone =$_POST["telefone"];
$dtcadastro = date("Y-m-d"); //padrão do banco

//passo 2 - montar a conexão com o banco de dados
include_once './conexao.php';

//passo 3 - montar o sql de gravar no banco
$sql="insert into cliente values( null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

//passo 4- mandar esse comando para o mysql
if(mysqli_query($con,$sql)){
    $msg ="Gravado com sucesso!";
}else{
    $msg="Erro ao gravar!";
}
 mysqli_close($con);
 echo "<script> alert('".$msg."');
 location.href='index.php';</script>";
?>
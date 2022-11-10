<?php include_once 'cabecalho.php'; ?>
    <h1> Consultar Cliente</h1>
    <hr>
    <h4> Consulta por nome:</h4>
    <form action="" method="">
        Nome:<br>
        <input type="text" placeholder="Digite o nome para buscar" name="nome" required/>
        <br><br>
        <input type="submit" value="Buscar"/>



    </form>
    <?php
    if(isset($_GET["nome"])){
        //pegar o campo nome da tela
        $nome =$_GET["nome"];
        //abrir a conexão com o banco
        include_once './conexao.php';
        //montar a instrução sql para buscar a informação
        $sql = "select *from cliente where nome like '".$nome."%'";
        //mysqli_query() -> executa a instrução no banco

        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            ?>

 

 
 <table class=" table"> 
    <tr>
        <td> Nome</td>
        <td> Email</td>
        <td> Telefone</td>
        <td> Data de Cadastro</td>
        <td> Editar </td>
        <td> Excluir </td>
    </tr>

   
    
<?php 
while ($row = mysqli_fetch_array($result)){

    ?>

    <tr>
        <td> <?php echo $row ["nome"]; ?></td>
        <td> <?php echo $row ["email"]; ?></td>
        <td> <?php echo $row ["telefone"]; ?></td>
        <td> <?php echo $row ["dtcadastro"]; ?></td>
        <td><a href ="editar.php?id=<?php echo $row ["idcliente"] ?>"> <img src="./img/editar.jpg"></a></td>
        <td><img src="./img/excluir.jpg"></td>
    </tr>
    </table>
    <?php
}
}else{
    echo "Não existe cliente com este nome.";
}

}

include_once 'rodape.php'; ?>
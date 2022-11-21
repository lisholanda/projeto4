<?php
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$artigo = $_POST["artigo"];
$foto = $_FILES["foto"];

//echo var_dump($foto);

$ext = explode(".", $foto["name"]); //foto, nome, ext
$ext = array_reverse($ext);
$ext = $ext[0];

//$data = explode("-".$dtcadastro);//
//$data = array_reverse($data);//

if(($ext != "jpg") && ($ext != "png") && ($ext != "gif")){
    echo "Arquivo Inválido!";
}elseif($foto["size"] <1024*2){
    echo"Tamanho excedido!";
}else{
    // go back to bank
}
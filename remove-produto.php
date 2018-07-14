<?php include("cabecalho-php.php");
include("conexao.php"); 
include("banco-produto.php"); 

$id = $_GET['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();

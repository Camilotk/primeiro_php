<?php 
include("conexao.php");

function listaCategoria($conexao) {
    $categorias = array();
    $resultados = mysqli_query($conexao, "SELECT * FROM categoria");
    while($resultado = mysqli_fetch_assoc($resultados)) {
        array_push($categorias, $resultado);
    }
    return $categorias;
}

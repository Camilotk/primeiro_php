<?php
function listaProduto($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome FROM produto AS p 
    JOIN categoria AS c ON c.id = p.categoria_id;");
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}

function buscaProduto($conexao, $id) {
    $querry = "SELECT * FROM produto WHERE produto.id = {$id}";
    $resultado = mysqli_query($conexao, $querry);
    return mysqli_fetch_assoc($resultado);
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria, $usado){
    $query = "INSERT INTO produto (id, nome, preco, descricao, categoria_id, usado) VALUES (null, '{$nome}', {$preco}, '{$descricao}', {$categoria}, {$usado})";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
    $query = "DELETE FROM produto WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria, $usado){
    $querry = "UPDATE produto SET nome='{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id={$categoria}, usado={$usado} WHERE id='{$id}'";
    echo $query;
    return mysqli_query($conexao, $querry);
}
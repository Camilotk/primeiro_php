<?php include("cabecalho-php.php") ?>
<?php include("conexao.php") ?>
<?php include("banco-produto.php") ?>
<?php $resultados = listaProduto($conexao); ?>
<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true"){
?>
<p class="alert-success">Produto removido com sucesso!</p>
<?php
}
?>
<table class="table table-striped table-bordered">
<?php foreach ($resultados as $resultado) { ?>
        <tr>
            <td> <?=$resultado["nome"]?> </td>
            <td> <?=$resultado["preco"]?> </td>
            <td> <?=substr($resultado["descricao"], 0, 40)?></td>
            <td> <?=$resultado["categoria_nome"]?> </td>
            <td>
                <a href="formulario-altera.php?id=<?=$resultado['id']?>" class="btn btn-primary">alterar</a>
            </td>
            <td> 
            <form action="remove-produto.php">
            <input type="hidden" name="id" value="<?=$resultado['id']?>">
            <button class="btn btn-danger" method="post">remove</button>
            </form>
            </td>
        </tr>
<?php
}
?>
</table>
<?php include("rodape-php.php") ?>
<?php include("cabecalho-php.php") ?>
<?php include("conexao.php") ?>
<?php include("banco-categoria.php") ?>
<?php include("banco-produto.php") ?>

<?php 
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias  = listaCategoria($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h1>Alterar um produto!</h1>
<form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td>
                <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>">
            </td>
        </tr>
        <tr>
            <td>Preço:</td>
            <td>
                <input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>">
            </td>
        </tr>
        <tr>
            <td>Descição:</td>
            <td>
                <textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="checkbox" name="usado" value="true" <?=$usado?>> Usado
        </tr>
        <tr>
            <td>Categoria:</td>
            <td>
                <select name="categoria" class="form-control">
                    <?php foreach ($categorias as $categoria) : 
                          $essaCategoria = $produto['categoria_id'] == $categoria['id'];
                          $selecao = $essaCategoria ? "selected='delected'" : "";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input class="btn btn-primary" type="submit" value="Alterar">
            </td>
        </tr>
    </table>
</form>
<?php include("rodape-php.php") ?>
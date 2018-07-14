<?php include("cabecalho-php.php") ?>
<?php include("conexao.php") ?>
<?php include("banco-categoria.php") ?>

<?php $categorias = listaCategoria($conexao) ?>
<h1>Cadastrar um produto!</h1>
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td>
                <input class="form-control" type="text" name="nome">
            </td>
        </tr>
        <tr>
            <td>Preço:</td>
            <td>
                <input class="form-control" type="number" name="preco">
            </td>
        </tr>
        <tr>
            <td>Descição:</td>
            <td>
                <textarea name="descricao" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="checkbox" name="usado" value="true"> Usado
        </tr>
        <tr>
            <td>Categoria:</td>
            <td>
                <select name="categoria" class="form-control">
                    <?php foreach ($categorias as $categoria) : ?>
                        <option value="<?=$categoria['id']?>"> <?=$categoria['nome']?>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input class="btn btn-primary" type="submit" value="Cadastrar">
            </td>
        </tr>
    </table>
</form>
<?php include("rodape-php.php") ?>
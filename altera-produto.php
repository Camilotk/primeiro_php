<?php include("cabecalho-php.php") ?>
<?php include("conexao.php") ?>
<?php include("banco-produto.php") ?>
<?PHP 
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$usado = $_POST["usado"];
$id = $_POST['id'];

if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria, $usado)) { ?>
    <p class="text-success">Produto <?= $nome; ?> adicionado com sucesso com o valor <?= $preco ?>!</p>
<?php } else { 
        $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto não pode ser cadastrado: <?= $msg ?></p>
<?php
}
mysqli_close($conexao);
?>

<?php include("rodape-php.php") ?>
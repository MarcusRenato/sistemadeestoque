<?php
require 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);

    $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
} else {
    header("Location: index.php");
}

require 'topo.php';
if ($sql->rowCount() > 0) {
    $produto = $sql->fetch();
    ?>
<form action="editar.php" method="post" class="justify-content-center">
    <div class="form-row justify-content-center">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
        <div class="col">
            <label for="">Quantidade:</label>
            <input type="text" name="quantidade" class="form-control" value="<?= $produto['quantidade'] ?>">
        </div>
        <div class="col">
            <label for="">Descrição:</label>
            <input type="text" name="descricao" class="form-control" value="<?= $produto['descricao'] ?>">
        </div>
        <div class="col">
            <label for="">Preço:</label>
            <input type="text" name="preco" class="form-control" value="<?= $produto['preco'] ?>">
        </div>
    </div>
    <br>
    <div class="form-row justify-content-center">
        <input type="submit" value="Atualizar" class="btn btn-primary">
    </div>
</form>
<?php
} else {
    header("Location: index.php");
}
require 'rodape.php';
?>
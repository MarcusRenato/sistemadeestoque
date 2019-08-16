<?php
require 'config.php';

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = addslashes($_POST['id']);
    $qtde = addslashes($_POST['quantidade']);
    $desc = addslashes($_POST['descricao']);
    $preco = addslashes($_POST['preco']);

    $sql = $pdo->prepare("UPDATE produtos SET quantidade = :qtde, descricao = :descricao, preco = :preco WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->bindValue(":qtde", $qtde);
    $sql->bindValue(":descricao", $desc);
    $sql->bindValue(":preco", $preco);
    $sql->execute();

    header("Location: index.php");
}
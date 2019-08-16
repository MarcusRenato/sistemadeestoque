<?php
require "config.php";

$qtde = addslashes($_POST['quantidade']);
$desc = addslashes($_POST['descricao']);
$preco = addslashes($_POST['preco']);

$sql = $pdo->prepare("INSERT INTO produtos SET descricao = :descricao, quantidade = :qtde, preco = :preco");
$sql->bindValue(":descricao", $desc);
$sql->bindValue(":qtde", $qtde);
$sql->bindValue(":preco", $preco);
$sql->execute();

header("Location: index.php");
?>
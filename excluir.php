<?php
require 'config.php';


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);

    $sql = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    header("Location: index.php");
} else {
    header("Location: index.php");
    exit;
}
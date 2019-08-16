<?php
$sql = $pdo->query("SELECT * FROM produtos");
if ($sql->rowCount() > 0) {
    ?>
<br>
<table class="table table-hover text-center">
    <tr>
        <th scope="col">Quantidade</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Ação</th>
    </tr>
    <?php

        foreach ($sql->fetchAll() as $produto) {
            ?>
    <tr>
        <td><?= $produto['quantidade'] ?></td>
        <td><?= $produto['descricao'] ?></td>
        <td><?= "R$ " . $produto['preco'] ?></td>
        <td>
            <a href="form-editar.php?id=<?= $produto['id'] ?>" class="btn btn-primary">Editar</a>
            <a href="excluir.php?id=<?= $produto['id'] ?>" class="btn btn-danger">Excluir</a>
        </td>
    </tr>
    <?php
        }
        ?>
</table>

<?php
}
?>
</div>


<script type=" text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
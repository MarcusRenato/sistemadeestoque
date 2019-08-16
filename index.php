<?php require 'topo.php'; ?>
<form method="post" action="cadastrar.php" class="justify-content-center">
    <div class="form-row justify-content-center">
        <div class="col">
            <label for="">Quantidade:</label>
            <input type="number" name="quantidade" class="form-control" required>
        </div>
        <div class="col">
            <label for="">Descrição:</label>
            <input type="text" name="descricao" class="form-control" required>
        </div>
        <div class="col">
            <label for="">Preço:</label>
            <input type="number" name="preco" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="form-row justify-content-center">
        <input type="submit" value="Cadastrar" class="btn btn-success">
    </div>
</form>
<?php require 'rodape.php'; ?>
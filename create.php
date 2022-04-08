
<?php include_once("templates/header.php"); ?>

<div class="container">
<h1 id="main-title">Criando Contato </h1>
<form id="create-form" action="<?php echo $BASE_URL ?>./config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
        <label for="name">Nome do Contato</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone do Contato</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" 
        row="3" required>
    </div>
    <div class="form-group">
        <label for="observations">Observações</label>
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar Contato</button>
</form>

<?php include_once("templates/backbtn.php"); ?>
</div>
<?php include_once("templates/footer.php"); ?>
<?php include 'layout_header.php'; ?>
<div class="page-header">
  <h1>Cadastro <small>Produtos</small></h1>
</div>
<form action="cadastro.php" method="POST" id="r_form">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Nome" id="form_username">
    <span class="error_form" id="username_error_message"></span>
  </div>
  <div class="form-group">
    <label>Preço</label>
    <input type="number" class="form-control" name="preco" placeholder="preco" step=".01" id="form_preco">
    <span class="error_form" id="preco_error_message"></span>
  </div>
  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Cadastar</button>
</form>


<?php
if ($_POST) {
  $Produto = new Produto();
  $Produto->Cadastro($_POST);
}
include 'layout_footer.php';
?>

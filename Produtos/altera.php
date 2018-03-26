<?php
include 'layout_header.php';
  $id = $_GET['id'];
  $Produto = new Produto();
  $dados = $Produto->selecionar($id);
  ?>
  <div class="page-header">
    <h1>Alterar dados <small><?php echo $dados['nome'] ?></small></h1>
  </div>
  <form action="altera.php" method="POST">
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $dados['nome'] ?>" id="form_username">
      <span class="error_form" id="username_error_message"></span>
    </div>
    <div class="form-group">
      <label>Preço</label>
      <input type="number" class="form-control" name="preco" placeholder="preco" value="<?php echo $dados['preco'] ?>" step=".01" id="form_preco">
      <span class="error_form" id="preco_error_message"></span>
    </div>
    <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Alterar</button>
  </form>

  <?php
  if ($_POST) {
    $Produto = new Produto();
    $Produto->alterar($_POST);
  }
  include 'layout_footer.php';
?>

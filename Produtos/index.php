<?php
include 'layout_header.php';
session_start();
if(!$_SESSION == null)
{?>
  <div class="alert alert-success" role="alert">
    <span class="glyphicon glyphicon-check"></span> <?php echo $_SESSION['msg']; ?>
  </div>
  <?php
  unset($_SESSION['msg']);
}
$Produto = new Produto();
$resultado = $Produto->Consulta();
?>
<div class="page-header">
  <h1>Produtos <small><a href="cadastro.php" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Cadastar Produtos</a></small></h1>
</div>
<?php if ($resultado == null) { ?>
  <h1>Nenhum dado foi encontrado</h1>
<?php }else {?>
<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Alterar</th>
      <th>Remover</th>
    </tr>
  </thead>
<tbody>
<?php
while ($dados = mysqli_fetch_assoc($resultado)) { ?>
<tr>
  <td><?php echo $dados['nome']; ?></td>
  <td><?php echo "R$ ".str_replace(".", ",", $dados['preco']); ?></td>
  <td><a href="altera.php?id=<?php echo $dados['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Alterar</a></td>
  <td><a href="remover.php?apagar=<?php echo $dados['id']; ?>" onclick="return deletardados(event)" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Remover</a></td>
</tr>

<?php
}
?>
</tbody>
</table>

<?php
}
  include 'layout_footer.php';
?>

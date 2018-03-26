<?php
require '../classes/Controladores/Produto.php';
$Produto = new Produto();

if (!empty($_GET)) {
  $id = $_GET['apagar'];
  $Produto->apagar($id);
}
?>

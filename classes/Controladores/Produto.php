<?php
include '../Classes/conexao.php';
include '../Classes/Model/Model.php';
class Produto
{
  private $tabela;
  private $Produto;
  function __construct()
  {
    $this->Produto = new Model();
    $this->tabela = "produto";
  }

  public function Consulta()
  {
    $result = $this->Produto->select($this->tabela);
    return $result;
  }
  public function Cadastro($post)
  {
  $query = "INSERT INTO ".$this->tabela." (nome, preco) VALUES ('"
   . $post["nome"] . "', '"
   . $post["preco"] . "')";
  $result = $this->Produto->query($query);
   if ($result == true) {
    session_start();
     $_SESSION['msg'] = "Produto inserido com sucesso";
   }else {
    session_start();
      $_SESSION['msg'] = "Erro ao inserir o Produto";
   }
  header('Location:index.php');
  }

  public function alterar($post)
  {
    $query = "UPDATE ".$this->tabela
    . " SET nome = '"
    . $post["nome"] ."', preco = '"
    . $post["preco"] ."' WHERE id = '"
    . $post["id"]."'";
    $result = $this->Produto->query($query);
     if ($result == true) {
      session_start();
       $_SESSION['msg'] = "Dados alterados com sucesso";
     }else {
      session_start();
        $_SESSION['msg'] = "Erro ao alterar os dados";
     }
    header('Location:index.php');
  }
  public function apagar($id)
  {
    $result = $this->Produto->delete($this->tabela, $id);
    if ($result == true) {
     session_start();
      $_SESSION['msg'] = "Produto excluido com sucesso";
    }else {
     session_start();
       $_SESSION['msg'] = "Erro ao excluir os dados";
    }
    header('Location:index.php');
  }
  public function Selecionar($id)
  {
    $result = $this->Produto->select_where($this->tabela, $id);
    return mysqli_fetch_assoc($result);
  }
}
?>

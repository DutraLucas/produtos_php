<?php

class Model{

  private $con;

  public function __construct() {
      $this->con = new Conexao();
  }

  //Função de Consulta
  public function select($tabela) {
        $sql = "SELECT * FROM ".$tabela;
      $result = mysqli_query($this->con->getCon(), $sql);

      if (mysqli_num_rows($result)) {
          return $result;
      } else {
          return false;
      }
  }

  public function query($query) {
      $sql = $query;
      if (mysqli_query($this->con->getCon(), $sql)) {
          return true;
      } else {
          return mysqli_error($sql);
      }
  }

  public function delete($tabela, $id)
  {
    $sql = "DELETE FROM ".$tabela." WHERE id = ".$id;
    if (mysqli_query($this->con->getCon(), $sql)) {
        return true;
    } else {
        return false;
    }
  }

  public function select_where($tabela, $id)
  {
    $sql = "SELECT * FROM ".$tabela." WHERE id = ".$id;
    $result = mysqli_query($this->con->getCon(), $sql);
    if (mysqli_num_rows($result)) {
        return $result;
    } else {
        return false;
    }
  }
  public function query_result($query) {
      $result = mysqli_query($this->con->getCon(), $query);
      if (mysqli_num_rows($result)) {
          return $result;
      } else {
          return false;
      }
  }
}

?>

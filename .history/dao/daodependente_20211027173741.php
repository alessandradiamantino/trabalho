<?php
  class daodependente{
    public function listaTodos()
    {
      $lista = [];
      $pst = Conexao::getPreparedStatement('select * from dependente;');
      $pst->execute();
      $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    }
    public function inclui(Dependente $dependente)
    {
      $sql = 'insert into dependente (idcliente, nome, unome, idade) values (?, ?, ?, ?);';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $dependente->getNome());
      $pst->bindValue(2, $dependente->getUnome());
      $pst->bindValue(3, $dependente->getI());
      $pst->bindValue(4, $dependente->getRg());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function exclui(Cadastro $cadastro)
    {
      $sql = 'delete from cadastro where id = ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $cadastro->getId());
      if ($pst->execute()) {;
        return true;
      }else{
        return false;
      }
    }
    public function atualiza(Cadastro $novo){
      $sql = 'update cadastro set nome = ?, unome = ?, cpf = ?, rg = ? where id = ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $novo->getNome());
      $pst->bindValue(2, $novo->getUnome());
      $pst->bindValue(3, $novo->getCpf());
      $pst->bindValue(4, $novo->getRg());
      $pst->bindValue(5, $novo->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }
?>
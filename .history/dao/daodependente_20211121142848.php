<?php
  class daodependente{
    public function listaTodos($id)
    {
      $lista = [];
      $pst = Conexao::getPreparedStatement('select * from dependente where idcliente = ?;');
      $pst->execute();
      $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    }
    public function inclui(Dependente $dependente)
    {
      $sql = 'insert into dependente (nome, unome, idade, idcliente) values (?, ?, ?, ?);';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $dependente->getNome());
      $pst->bindValue(2, $dependente->getUnome());
      $pst->bindValue(3, $dependente->getIdade());
      $pst->bindValue(4, $dependente->getCliente()->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function exclui(Dependente $dependente)
    {
      $sql = 'delete from dependente where id = ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $dependente->getId());
      if ($pst->execute()) {;
        return true;
      }else{
        return false;
      }
    }
    public function atualiza(Dependente $novo){
      $sql = 'update dependente set nome = ?, unome = ?, idade = ?, idcliente = ? where id = ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $novo->getNome());
      $pst->bindValue(2, $novo->getUnome());
      $pst->bindValue(3, $novo->getIdade());
      $pst->bindValue(4, $novo->getCliente()->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }
?>
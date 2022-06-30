<?php
  class daodependente{
    public function listaTodosCliente($id)
    {
      $lista = [];
      $pst = Conexao::getPreparedStatement('select * from dependente where idcliente = ?;');
      $pst->bindValue(1, $id);
      $pst->execute();
      $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    }
    public function listaTodosFuncionario($id)
    {
      $lista = [];
      $pst = Conexao::getPreparedStatement('select * from dependenteFuncionario where idFuncionario = ?;');
      $pst->bindValue(1, $id);
      $pst->execute();
      $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
      return $lista;
    }
    public function incluiDependenteCliente(Dependente $dependente)
    {
      $sql = 'insert into dependente (nome, unome, idade, idcliente) values (?, ?, ?, ?);';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $dependente->getNome());
      $pst->bindValue(2, $dependente->getUnome());
      $pst->bindValue(3, $dependente->getIdade());
      $pst->bindValue(4, $dependente->getPessoa()->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function editaDependenteCliente(Dependente $dependente)
    {
      $sql = 'update dependente set nome = ?, unome = ?, idade = ? where id= ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $dependente->getNome());
      $pst->bindValue(2, $dependente->getUnome());
      $pst->bindValue(3, $dependente->getIdade());
      $pst->bindValue(4, $dependente->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function editaDependenteFuncionario(Dependente $dependente)
    {
      $sql = 'update dependenteFuncionario set nome = ?, unome = ?, idade = ? where id= ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $dependente->getNome());
      $pst->bindValue(2, $dependente->getUnome());
      $pst->bindValue(3, $dependente->getIdade());
      $pst->bindValue(4, $dependente->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function incluiDependenteFuncionario(Dependente $dependente)
    {
      $sql = 'insert into dependenteFuncionario (nome, unome, idade, idFuncionario) values (?, ?, ?, ?);';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $dependente->getNome());
      $pst->bindValue(2, $dependente->getUnome());
      $pst->bindValue(3, $dependente->getIdade());
      $pst->bindValue(4, $dependente->getPessoa()->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function exclui($id)
    {
      $sql = 'delete from dependente where id = ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $id);
      if ($pst->execute()) {;
        return true;
      }else{
        return false;
      }
    }
    public function excluiDependenteFuncionario($id)
    {
      $sql = 'delete from dependenteFuncionario where id = ?;';
      $pst = Conexao::getPreparedStatement($sql);
      $pst->bindValue(1, $id);
      if ($pst->execute()) {
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
      $pst->bindValue(4, $novo->getPessoa()->getId());
      if ($pst->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }
?>
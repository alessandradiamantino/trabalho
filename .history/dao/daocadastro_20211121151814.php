<?php
class daocadastro
{
  public function listaTodos()
  {
    $lista = [];
    $pst = Conexao::getPreparedStatement('select  nome, unome, cpf, rg from cadastro;');
    $pst->execute();
    $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
    return $lista;
  }
  public function listaporid($id) : Cadastro
  {
    $lista = [];
    $cliente = new Cadastro();
    $pst = Conexao::getPreparedStatement('select nome, unome, cpf, rg from cadastro where id = ?;');
    $pst -> bindValue(1, $id);
    $pst->execute();

    $lista = $pst->fetch(PDO::FETCH_ASSOC);
    $cliente -> setId($lista['id']);
    $cliente -> setNome($lista['nome']);
    $cliente -> setUnome($lista['unome']);
    $cliente -> setCpf($lista['cpf']);
    $cliente -> setRg($lista['rg']);
    return $cliente;
  }
  public function validalogin($usuario, $senha) : Cadastro
  {
    $lista = [];
    $cliente = new Cadastro();
    $pst = Conexao::getPreparedStatement('select id from cadastro where nome = ? and senha = ?;');
    $pst -> bindValue(1, $usuario);
    $pst -> bindValue(2, $senha);
    $pst->execute();

    $lista = $pst->fetch(PDO::FETCH_ASSOC);
    if(empty($lista)){
      return false;
    }
    return $lista;
  }
  public function registros(){
    $pst = Conexao::getPreparedStatement('select id from cadastro order by id desc limit 1');
    $pst->execute();
    $lista = $pst->fetch(PDO::FETCH_ASSOC);
    return $lista;
  }
  public function inclui(Cadastro $cadastro, $senha)
  {
    $sql = 'insert into cadastro (id, nome, unome, cpf, rg, senha) values (?, ?, ?, ?, ?, ?);';
    $pst = Conexao::getPreparedStatement($sql);
    $i = $this->registros();
    $pst -> bindValue(1, $i['id']+1);
    $pst->bindValue(2, $cadastro->getNome());
    $pst->bindValue(3, $cadastro->getUnome());
    $pst->bindValue(4, $cadastro->getCpf());
    $pst->bindValue(5, $cadastro->getRg());
    $pst->bindValue(6, $senha);
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

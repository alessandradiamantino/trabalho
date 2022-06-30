<?php
class Cadastro{
  private $id;
  private $nome;
  private $unome;
  private $cpf;
  private $rg;
  private $nasc;
  
  public function __construct(){

  }

  public function getId(){
    return $this->id;
  }
  public function setId($){
    $this->id = $id;
  }
  public function getNome(){
    return $this->nome;
  }
  public function setNome($nome){
    $this->id = $nome;
  }
}
<?php
class Dependente{
  private $id;
  private $nome;
  private $unome;
  private $idade;
  private $pessoa;
  
  public function __construct(){

  }

  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
  }
  public function getNome(){
    return $this->nome;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getUnome(){
    return $this->unome;
  }
  public function setUnome($unome){
    $this->unome = $unome;
  }
 public function getIdade(){
   return $this->idade;
 }
 public function setIdade($idade){
   $this->idade = $idade;
 }
 public function getPessoa():Cadastro{
  return $this->pessoa;
 }
 public function setPessoa(Cadastro $pessoa){
   $this->pessoa = $pessoa;
 }
}
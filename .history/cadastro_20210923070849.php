<?php
class Cadastro{
  private $id;
  private $nome;
  private $unome;
  private $cpf;
  private $rg;
  
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
    $this->id = $nome;
  }
  public function getUnome(){
    return $this->unome;
  }
  public function setUnome($unome){
    $this->unome = $unome;
  }
  public function getCpf(){
    return $this->cpf;
  }
  public function setCpf($cpf){
    $this->cpf = $cpf;
  }
  public function getRg(){
    return $this->rg;
  }
  public function setRg($rg){
    $this->id = $id;
  }
}
<?php
class Dependente{
  private $id;
  private $nome;
  private $unome;
  private $idade;
  private 
  
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
    $this->rg = $rg;
  }
}
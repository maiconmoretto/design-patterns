<?php

class Orcamento {
  private  $valor;
  private $itens;
  private $estado;

  function __construct($novoValor){
    $this->valor = $novoValor;
    $this->itens = [];
  }

  public function getItens(){
    return $this->itens;
  }

  public function addItem(Item $novoItem){
    $this->itens[] = $novoItem;
  }

  public function getValor()
  {
    return $this->valor;
  }

  public function setValor($novoValor)
  {
    $this->valor = $novoValor;
  }
}
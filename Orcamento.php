<?php

class Orcamento {
  private  $valor;
  private $itens;
  private $estado;

  function __construct($novoValor){
    $this->valor = $novoValor;
    $this->itens = [];
    $this->estado = new EmAprovacao();
  }

  public function getItens()
  {
    return $this->itens;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setEstado($novoEstado)
  {
    $this->estado = $novoEstado;
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

  public function aplicaDesconto()
  {
    $this->estado->aplica($this);
  }

}
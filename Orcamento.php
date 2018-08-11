<?php

class Orcamento {
  private  $valor;
  private $itens;

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

    /**
     * @return mixed
     */
  public function getValor()
  {
    return $this->valor;
  }


  }
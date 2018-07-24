<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 24/07/2018
 * Time: 19:41
 */
class Orcamento {
    private  $valor;

   function __construct($novoValor){
       $this->valor = $novoValor;
   }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }


}
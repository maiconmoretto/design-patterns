<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 24/07/2018
 * Time: 19:45
 */
class CalculadoraDeImpostos {
    public function calculaICMS(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.05;
    }
}
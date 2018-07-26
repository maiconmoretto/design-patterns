<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 26/07/2018
 * Time: 19:27
 */

class ICMS implements  Imposto
{

    public function calcula (Orcamento $orcamento){
        return $orcamento->getValor() * 0.5;
    }
}
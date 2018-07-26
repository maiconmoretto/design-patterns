<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 26/07/2018
 * Time: 19:36
 */

class ISS implements Imposto
{
    public function calcula (Orcamento $orcamento){
        return $orcamento->getValor() * 0.9;
    }
}
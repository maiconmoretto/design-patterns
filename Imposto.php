<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 26/07/2018
 * Time: 19:23
 */
interface  Imposto {
    public function calcula(Orcamento $orcamento);
}
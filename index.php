<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 24/07/2018
 * Time: 19:47
 */
$reforma = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();

echo  $calculadora->calculaICMS();
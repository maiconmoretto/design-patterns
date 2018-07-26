<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 24/07/2$reforma018
 * Time: 19:47
 */
require 'Imposto.php';
require 'Orcamento.php';
require 'CalculadoraDeImpostos.php';
require  'ISS.php';
require 'ICMS.php';

$reforma = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();

echo  $calculadora->calculaICMS($reforma, new ICMS());
echo  '<br>';
echo  $calculadora->calculaICMS($reforma, new ISS());
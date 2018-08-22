<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 24/07/2$reforma018
 * Time: 19:47
 */
require 'Imposto.php';
require 'Orcamento.php';
require 'Item.php';
require 'CalculadoraDeImpostos.php';
require 'CalculadoraDeDescontos.php';
require  'ISS.php';
require 'ICMS.php';

$reforma = new Orcamento(501);
$calculadora = new CalculadoraDeImpostos();

echo  $calculadora->calculaICMS($reforma, new ICMS());
echo  '<br>';
echo  $calculadora->calculaICMS($reforma, new ISS());
echo  '<br>';
//descontos
echo "testes de  descontos";
echo  '<br>';
$calculadoraDeDescontos = new CalculadoraDeDescontos();

echo "desconto";
$reforma->addItem(new Item("tijolo", 500));
$reforma->addItem(new Item("cimento 1kg", 250));
echo  '<br>';
echo $calculadoraDeDescontos->desconto($reforma);
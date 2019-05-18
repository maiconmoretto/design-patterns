<?php
/**
 * Created by PhpStorm.
 * User: Maicon Moretto
 * Date: 24/07/2$reforma018
 * Time: 19:47
 */
require 'Imposto.php';
require 'Orcamento.php';
require 'Desconto.php';
require 'Desconto5Itens.php';
require 'Desconto500Reais.php';
require 'SemDesconto.php';
require 'Item.php';
require 'CalculadoraDeImpostos.php';
require 'CalculadoraDeDescontos.php';
require  'ISS.php';
require 'ICMS.php';

$reforma = new Orcamento(1200);
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
$reforma->addItem(new Item("tijolo", 250));
$reforma->addItem(new Item("cimento 1kg", 250));
$reforma->addItem(new Item("pa", 250));
$reforma->addItem(new Item("areia 1kg", 250));
$reforma->addItem(new Item("abc 1kg", 250));
echo  '<br>';
echo $calculadoraDeDescontos->desconto($reforma);

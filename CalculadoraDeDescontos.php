<?php
require_once 'Desconto5Itens.php';
require_once 'Desconto500Reais.php';
require_once 'SemDesconto.php';

class CalculadoraDeDescontos {


	public function desconto(Orcamento $Orcamento)
	{
		$desconto5Itens = new Desconto5Itens();
		$desconto500Reais = new Desconto500Reais();
		$semDesconto = new Desconto5Itens();

		$desconto5Itens->setProximo($desconto500Reais);
		$desconto500Reais->setProximo($semDesconto);

		$valorDesconto = $desconto5Itens->desconto($Orcamento);

		return $valorDesconto;
	}

}

?>

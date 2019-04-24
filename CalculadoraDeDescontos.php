<?php
require 'Desconto5Itens.php';
require 'Desconto500Reais.php';

class CalculadoraDeDescontos {


	public function desconto(Orcamento $Orcamento)
	{
		$desconto = new Desconto5Itens();
		$valorDoDesconto = $desconto->desconto($Orcamento);
		if ($valorDoDesconto == 0) {
			$desconto = new Desconto500Reais();
			$valorDoDesconto = $desconto->desconto($Orcamento);
		}
        return $valorDoDesconto;
	}

}

?>

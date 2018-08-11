<?php

class CalculadoraDeDescontos {


	public function calcula(Orcamento $Orcamento)
	{
		if (count($Orcamento->getItens()) > 5){
			return $Orcamento->getValor() * 0.1;
		}else{
			return 0;
		}

	}

}

?>
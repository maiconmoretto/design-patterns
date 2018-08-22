class Desconto5Itens {
    public function desconto (Orcamento $Orcamento){

	if (count($Orcamento->getItens()) > 5){
			return $Orcamento->getValor() * 0.1;
		}else{
            return 0;
        }

    }
}
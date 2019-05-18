<?php

class Desconto500Reais implements Desconto {
    private $proximoDesconto;

    public function desconto (Orcamento $Orcamento)
    {
        if ($Orcamento->getValor() > 500) {
            return $Orcamento->getValor() * 0.05;
        } else {
            return 0;
        }
    }

    public function setProximo(Desconto $proximo) {
        $this->proximoDesconto = $proximo;
    }

}

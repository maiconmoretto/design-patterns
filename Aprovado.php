<?php

class Aprovado {
    public function aplica(Orcamento $Orcamento)
    {
        $Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.5);
    }
}
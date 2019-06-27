<?php

class ICMS extends TemplateDeImpostoCondicional
{

    public function calcula (Orcamento $orcamento) {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.15; 
        }
        return $orcamento->getValor() * 0.5;
    }

    public  function deveUsarMaximo(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() > 500;
    }

    public  function taxacaoMaxima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.05;
    }

    public  function taxacaoMinima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.15;
    }

}
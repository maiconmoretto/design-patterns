<?php

class ISS extends TemplateDeImpostoCondicional
{
    public function calcula (Orcamento $orcamento){
        return $orcamento->getValor() * 0.9;
    }

    public  function deveUsarMaximo(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() > 300;
    }

    public  function taxacaoMaxima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.01;
    }

    public  function taxacaoMinima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.15;
    }
}
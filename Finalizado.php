<?php

class Finalizado {
    public function aplica(Orcamento $Orcamento)
    {
       throw new Exception("Um orçamento finalizado não pode receber descontos");
    }
}
<?php

class Reprovado {
    public function aplica(Orcamento $Orcamento)
    {
       throw new Exception("Um orçamento reprovado não pode receber descontos");
    }
}
<?php
    class semDesconto implements Desconto {
        public function desconto(Orcamento $Orcamento) {
            return 0;
        }

        public function setProximo(Desconto $proximo) {
            // faz nada
        }

    }

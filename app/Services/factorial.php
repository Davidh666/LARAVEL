<?php

namespace App\Services;

class factorial
{
    private $numero;

    public function __construct($n) {
        $this->numero = $n;
    }

    public function calcular() {
        $n = $this->numero;
        if ($n < 0) return "No definido";

        $resultado = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }
}
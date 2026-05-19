<?php

namespace App\Services;

class Operaciones
{
    private $num1;
    private $num2;

    /**
     * Create a new class instance.
     */
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sumar()
    {
        return $this->num1 + $this->num2;
    }

    public function restar()
    {
        return $this->num1 - $this->num2;
    }

    public function multiplicar()
    {
        return $this->num1 * $this->num2;
    }

    public function dividir()
    {
        if ($this->num2 == 0) {
            return 'Error: División por cero';
        }
        return $this->num1 / $this->num2;
    }
}

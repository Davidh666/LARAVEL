<?php

namespace App\Services;

class ecuacion
{
    /**
     * Create a new class instance.
     */
   private $a;
     private $b;
     private $c;

        public function __construct($a, $b, $c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        private function d() {
            return $this->b * $this->b - 4 * $this->a * $this->c;
        }
        public function raices(){
            $resultado = [];

            if($this->d() == 0){
                $x = -$this->b / (2 * $this->a);
                $resultado = [
                    'tipo' => 'doble',
                    'x1' => $x,
                    'x2' => $x,
                    'mensaje' => "Raíz doble: x = $x"
                ];
            }
            else if($this->d() > 0){
                $x1 = (-$this->b + sqrt($this->d())) / (2 * $this->a);
                $x2 = (-$this->b - sqrt($this->d())) / (2 * $this->a);
                $resultado = [
                    'tipo' => 'reales',
                    'x1' => $x1,
                    'x2' => $x2,
                    'mensaje' => "Raíces reales: x₁ = $x1, x₂ = $x2"
                ];
            }
            else {
                $real = -$this->b / (2 * $this->a);
                $imag = sqrt(-$this->d()) / (2 * $this->a);
                $resultado = [
                    'tipo' => 'complejas',
                    'real' => $real,
                    'imaginaria' => $imag,
                    'mensaje' => "Raíces complejas: x₁ = $real + {$imag}i, x₂ = $real - {$imag}i"
                ];
            }

            return $resultado;
        }
}


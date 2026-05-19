<?php

namespace App\Services;


    class Complejos{
        private $a;
        private $b;
        private $c;
        private $d;

        public function __construct($a, $b, $c, $d) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            $this->d = $d;
        }
        public function suma(){
            $real= $this->a +$this->c;
            $imag= $this->b +$this->d;
            return "$real + $imag i";

        }

        public function resta(){
            $real= $this->a -$this->c;
            $imag= $this->b -$this->d;
            return "$real + $imag i";
        }
        public function multiplicacion(){
            $real= ($this->a * $this->c) - ($this->b * $this->d);
            $imag= ($this->a * $this->d) + ($this->b * $this->c);
            return "$real + $imag i";
        } 
        public function division(){
            $denominador= ($this->c * $this->c) + ($this->d * $this->d);
            $real= (($this->a * $this->c) + ($this->b * $this->d)) /(($this->c * $this->c) + ($this->d * $this->d));
            $imag= (($this->b * $this->c) - ($this->a * $this->d)) /(($this->c * $this->c) + ($this->d * $this->d));
            return "$real + $imag i";
        } 


    }
    

    
    

?>
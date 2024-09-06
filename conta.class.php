<?php

    abstract class Conta {
        public function __construct(protected string $agencia = "", protected string $numero = "", protected string $titular = "", protected float $saldo = 0.00){}
    
    //Gets e Sets:

        public function getAgencia(){

            return $this -> agencia;
        }
        public function setAgencia($agencia){

            $this -> agencia = $agencia;
        }
////////////////////////////////////////////////////////////////////////
        public function getNumero(){

            return $this -> numero;
        }
        public function setNumero($numero){

            $this -> numero = $numero;
        }
////////////////////////////////////////////////////////////////////////
        public function getTitular(){

            return $this -> titular;
        }
        public function setTitular($titular){

            $this -> titular = $titular;
        }
////////////////////////////////////////////////////////////////////////
        public function getSaldo(){

            return $this -> saldo;
        }
        public function setSaldo($saldo){

            $this -> saldo = $saldo;
        }
////////////////////////////////////////////////////////////////////////
        public function retirar($valor){
            if($valor > 0){
                $this -> saldo -= $valor;
            }
        }

        public function depositar($valor){

            $this -> saldo += $valor;
        }
    }
?>
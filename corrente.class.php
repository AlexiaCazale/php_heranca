<?php

    class Corrente extends Conta{
        public function __construct(private float $limite = 0, $agencia, $numero, $titular, $saldo){
            parent::__construct($agencia, $numero, $titular, $saldo);
        }

        public function getLimite(){
            return $this -> limite;
        }
        public function setLimite($limite){
            $this -> limite = $limite;
        }

        // public function teste(){
        //     $this -> saldo += 1000;
        //     echo $this -> saldo;
        // }

        public function retirar($valor){

            if($valor <= $this -> saldo + $this -> limite){
                parent :: retirar($valor);
            }else{
                echo 'Saldo Insuficiente';
            }
        }
    }

?>
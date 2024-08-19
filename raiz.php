<?php

    class Conta{
        public $nome;
        public $saldo = 0; 
        

        function sacar($valorTirado, $saldo){
            $atual = $saldo - $valorTirado;
            if($atual <= 0 ){
                echo ("O valor desejado tirar e maior que o Saldo atual");
            }
        }

        function depositar($valor){

        }

        

        function verSaldo() {
            echo "olá, Titular ".$this->nome."\n";
            echo "Seu saldo Atual : ".$this->saldo."\n \n";
        }
    }

    $conta = new Conta();
    $conta -> nome = "Lucas";
    $conta -> saldo = "500";
    $conta -> verSaldo();


    $conta2 = new Conta();
    $conta2 -> nome = "Junior";
    $conta2 -> saldo = "250";
    $conta2 -> verSaldo();
?>
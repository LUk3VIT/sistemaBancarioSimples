<?php

    class Conta{
        public string $nome;
        public float $saldo = 0; 
        
        function __construct($nome,$saldo){
            $this->nome = $nome;
            $this->saldo = $saldo;
        }

        function verSaldo() {
            echo "olá, Titular ".$this->nome."\n";
            echo "Seu saldo Atual : ".$this->saldo."\n \n";
        }

        function sacar($sacar){
            $valor = $this->saldo;

            $final = $valor - $sacar;
            $valor = $final;

            return
            
        }
    }

    $conta = new Conta("Lucas",500);
    $conta->verSaldo();

    $conta->sacar(100);

    $conta->verSaldo();


?>
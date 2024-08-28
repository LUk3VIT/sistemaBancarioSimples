<?php

    class Conta{
        public string $nome;
        public float $saldo; 
        
        function __construct($nome,$saldo){
            $this->nome = $nome;
            $this->saldo = $saldo;
        }

        function verSaldo() {
            echo "olá, Titular ".$this->nome."\n";
            echo "Seu saldo Atual : ".$this->saldo."\n \n";
        }

        function sacar(float $sacar){
            $valor = $this->saldo;

            $final = $valor - $sacar;

            return $this->saldo = $final;
        }

        function depositar(float $depositar){
            $saldo = $this->saldo;

            $conta = $saldo + $depositar;

            return $this->saldo = $conta; 
        }

        function pix( $pix, Conta $destino){

            if ($pix > 0){
                $this->sacar($pix);
                $destino->depositar($pix);
                return $this->saldo;
            }
        }
    }


    $conta = new Conta("Lucas",500);
    $conta2 = new Conta("Joao",10);
    
    $conta->verSaldo();
    $conta2->verSaldo();

    $conta->pix(150,$conta2);

    $conta->verSaldo();
    $conta2->verSaldo();
?>
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

        function sacar($sacar){
            $valor = $this->saldo;

            $final = $valor - $sacar;

            return $this->saldo = $final;
        }

        function pix($pix, $destino){
            $saldo = $this->saldo;
            $destinoReal = $this->nome;

            if ($destino == $destinoReal){
                echo "Pessoa ", $destinoReal ," é valido!! \n";
                if ($pix > 0){
                    echo "pix de", $pix,"enviado \n";
                    $final = $pix + $saldo;

                    return $this->saldo = $final;

                } else {
                    echo "Pix tem que ser maior que 0,00 \n";
                }
            }else{
                echo "Pessoa ", $destino, " não é valido \n";
            }
        }
    }

    $conta = new Conta("Lucas",500);
    $conta->verSaldo();
    $conta->pix(1,"Joao");
    $conta->verSaldo();

    $conta = new Conta("Joao",100);
    $conta->verSaldo();

?>
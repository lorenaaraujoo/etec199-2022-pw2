<?php 

    //declare(strict_types=1);

    class contaBancaria{
       private $banco;
       private $nomeTitular;
       private $numeroAgencia;
       private $numeroConta;
       private $saldo;

        public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo){
           $this->banco = $banco;
           $this->nomeTitular = $nomeTitular;
           $this->numeroAgencia = $numeroAgencia;
           $this->nomeTitular = $nomeTitular;
           $this->saldo = $saldo;
        }

       public function obterSaldo(){
            return $this->saldo;
       }

       public function depositar($valor){
            $this->saldo += $valor;
            return 'Depósito de R$ '.$valor .'realizado!';
       }

       public function sacar($valor){
            $this->saldo -= $valor;
            return 'Saque de R$ '.$valor .'realizado!';
       }
    }

        $conta = new contaBancaria(
            'Banco do Brasil', //Banco
            'Lorena Araujo', //Nome titulado
            '1234', //Número Agência
            '12345678', //Número conta
            0 //Saldo
        );

    echo $conta->obterSaldo(); //0
    echo PHP_EOL;

    echo $conta->depositar(300.00);
    echo PHP_EOL;
    echo $conta->obterSaldo(); //300

    echo $conta->sacar(50.00);
    echo PHP_EOL;
    echo $conta->obterSaldo(); //250
    
?>
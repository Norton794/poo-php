<?php
abstract class Conta {
    //atributos
    private $agencia;
    private $conta;
    private $saldo;
    //métodos
//
    function __construct($agencia,$conta) {
        $this->agencia = $agencia;
        $this->conta = $conta;
        echo '<br>Contrutor da Classe executado.<br>';
      }
     
     function __destruct() {
        echo '<br>Método destruct executado!<br>';
      }
//     

    public function depositar($valor){
        $this->saldo += $valor;
      }
      
      public function sacar($valor) {
        if ($this->saldo>=$valor){
          $this->saldo -= $valor;
        }else{
            echo "Operação não suportada!<br>";
        }
      }
      
      public function saldo() {
        return $this->saldo;
      }

      //Getters e Setters
      function getAgencia() {
        return $this->agencia;
      }
    
      function getConta() {
        return $this->conta;
      }

      function getSaldo() {
        return $this->saldo;
      }
    
      function setAgencia($agencia){
        $this->agencia = $agencia;
      }
    
      function setConta($conta){
        $this->conta = $conta;
      }
    
      function setSaldo($saldo){
        $this->saldo = $saldo;
      }
    
    
    }
      
<?php
class Conta {
    //atributos
    public $agencia;
    public $conta;
    public $saldo;
    //métodos
    public function depositar($valor){
        $this->saldo += $valor;
      }
      
      public function sacar($valor) {
        if ($this->saldo>=$valor){
          $this->saldo -= $valor;
        }
      }
      
      public function saldo() {
        return $this->saldo;
      }
    }
      
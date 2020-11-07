<?php

class ContaSalario extends Conta{
  
  function lancarPgto($valor) {
    $novoSaldo = $this->getSaldo()+ $valor;
    $this->setSaldo($novoSaldo);
  }
}

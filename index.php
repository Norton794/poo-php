<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Classe, Atributos e Métodos - Visibilidade</title>
    </head>
    <body>
        <?php
        require_once './Conta.php';  //Inclui a classe Conta
        $cnt = new Conta();   //Instancia um objeto da classe Conta
        $cnt->setAgencia('7768-4'); //Atribui a Angência
        $cnt->setConta('11229-8'); //Atribui o número da conta
        $cnt->setSaldo(0.0); //Saldo inicial
        
        echo "Saldo Atual: {$cnt->getSaldo()}<br>";
        $cnt->depositar(100.0);
        echo "Saldo Atual: {$cnt->getSaldo()}<br>";
        $cnt->sacar(10.0);
        echo "Saldo Atual: {$cnt->getSaldo()}<br>";
        $cnt->sacar(100.0);
        echo "Saldo Atual: {$cnt->getSaldo()}<br>";
        
        ?>
    </body>
</html>

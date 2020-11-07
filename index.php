<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Classe, Atributos e Métodos</title>
    </head>
    <body>
        <?php
        require_once './Conta.php';  //Inclui a classe Conta
        $cnt = new Conta();   //Instancia um objeto da classe Conta
        $cnt->agencia = '7768-4'; //Atribui a Agência
        $cnt->conta = '11229-8'; //Atribui o número da conta
        $cnt->saldo = 0.0; //Saldo inicial
        
        echo "Saldo Atual: {$cnt->saldo()}<br>";
        $cnt->depositar(100.0);
        echo "Saldo Atual: {$cnt->saldo()}<br>";
        $cnt->sacar(10.0);
        echo "Saldo Atual: {$cnt->saldo()}<br>";
        $cnt->sacar(100.0);
        echo "Saldo Atual: {$cnt->saldo()}<br>";
        
        ?>
    </body>
</html>

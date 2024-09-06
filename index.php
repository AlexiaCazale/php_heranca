<?php

    require_once "conta.class.php";
    require_once "corrente.class.php";
    require_once "poupanca.class.php";

    $corrente = new Corrente(1000.00, '123-2', '12345-6', 'Maria da Silva', 5000.00);

    //echo $corrente -> teste();
    echo $corrente -> getTitular();
    //echo "<br>";
    $corrente -> retirar(4500);
    echo "<br>";
    echo $corrente -> getSaldo();

    $poupanca = new Poupanca(10 , '432-1', '65478-9', 'Paulo Rocha', 10000.00);
    echo '<br>';
    echo $poupanca -> getTitular();
    echo "<br>";
    $poupanca -> retirar(11000);
    echo "<br>";
    echo $poupanca -> getSaldo();

    // echo '<pre>';
    // var_dump($corrente);
    // echo '</pre>';

?>

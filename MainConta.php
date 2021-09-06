<?php
require 'Conta.php';

//Instanciando contas

$acc1 = new Conta();
$acc2 = new Conta();
//Definido o valor dos atributos, obs: usa-se a flecha para acessar um atributo ->
$acc1->titularCpf = '123.46.789-99';
$acc2->titularCpf = '987.654.321-11';
$acc1->nomeTitular = 'Rui';
$acc2->nomeTitular = 'Nara';
$acc1->saldo = 100;
$acc2->saldo = 1500;

echo var_dump($acc1) . PHP_EOL;
echo var_dump($acc2) . PHP_EOL;
//Iterando sobre os atributos 
foreach ($acc1 as $data){
    echo $data . PHP_EOL;
}
foreach ($acc2 as $data){
    echo $data . PHP_EOL;
}


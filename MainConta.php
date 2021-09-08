<?php
require 'Conta.php';

//Instanciando contas

$acc1 = new Conta("123456789-99", "Rui");
$acc2 = new Conta("111222333-44", "Nara");

$acc1->deposita(1000);
$acc2->deposita(2200);

echo $acc1->getToString();
echo $acc2->getToString();

//Inicilaizando duas contas sem guardar a referência em variáveis
//só para poder incrementar a variável global
new Conta(" ", "    ");
new Conta(" ", "    ");

echo Conta::getTotalContas() . PHP_EOL;


//Definido o valor dos atributos, obs: usa-se a flecha para acessar um atributo ->
// $acc1->titularCpf = '123.46.789-99';
// $acc2->titularCpf = '987.654.321-11';
// $acc1->nomeTitular = 'Rui';
// $acc2->nomeTitular = 'Nara';
// $acc1->saldo = 100;
// $acc2->saldo = 1500;

// echo var_dump($acc1) . PHP_EOL;
// echo var_dump($acc2) . PHP_EOL;
// // //Iterando sobre os atributos 
// // foreach ($acc1 as $data){
// //     echo $data . PHP_EOL;
// // }
// // foreach ($acc2 as $data){
// //     echo $data . PHP_EOL;
// // }

// //Sacando 10 reais da $acc1
// $acc1->sacar(10);
// //Apresentando todos os dados da $acc1
// echo $acc1->getToString();

// $acc2->depositar(0);

// $acc2->sacar(1500);
// echo $acc2->getToString();

// $acc2->depositar(100);
// //echo $acc2->getToString();
// $acc2->transfere($acc1, 50);

// echo $acc2->getToString();
// echo $acc1->getToString();
<?php
require 'Conta.php';


//Instanciando contas

$acc1 = new Conta(new Titular(new CPF("123.456.789-99"), "Rui"));
$acc2 = new Conta(new Titular(new CPF("111222333-44"), "Nara"));
$acc3 = new Conta(new Titular(new CPF('888999666-01'), 'Ploop'));
$acc1->deposita(1000);
$acc2->deposita(2200);

echo $acc1->getToString();
echo $acc2->getToString();

echo Conta::getTotalContas() . PHP_EOL;

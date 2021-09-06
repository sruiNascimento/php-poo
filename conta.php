<?php
//Função para criar conta

function criarConta(string $cpf, string $nomeTitular, float $saldo): array
{
    return [
      $cpf => [
          'titular' => $nomeTitular,
          'saldo' => $saldo
      ]
    ];

}

$conta1 = criarConta('11122233345', 'Rui', 12000.00);


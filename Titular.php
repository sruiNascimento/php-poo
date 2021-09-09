<?php
class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome) 
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getToString(): string
    {
        return  "CPF: $this->cpf" . PHP_EOL . 
                "Nome: $this->nome" . PHP_EOL;
    }

    private function validaNome($nome): void
    {
        if (strlen($nome) < 2) {
            echo "Nome inválido, pois nome precisa conter pelo menos 3 caracteres" . PHP_EOL;
            exit();
        }
    }

}
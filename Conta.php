<?php
class Conta
{
    //Definir os dados da classe Conta
    private string $titularCpf;
    private string $nomeTitular;
    private float $saldo;


    //Getters e Setters

    public function getTitularCpf(): string 
    {
        return $this->titularCpf;
    }

    public function setTitularCpf($titularCpf): void
    {   
        $this->titularCpf = $titularCpf;
    }

    public function getNomeTitular(): string 
    {
        return $this->nomeTitular;
    }

    public function setNomeTitular($nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo($saldo): void 
    {
        $this->saldo = $saldo;
    }
    
    //Método para sacar
    public function sacar(float $valor): void
    {
        if ($this->temSaldo($valor)) {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso" . PHP_EOL;
        } else {
            $this->erroTransacao();
        }
    }

    public function depositar(float $valor): void
    {
        if ($valor > 0) {
            $this->saldo +=($valor);
        } else {
            $this->erroTransacao();
        }
    }

    public function transfere(Conta $conta, float $valor): void
    {
        if ($this->temSaldo($valor)) {
            $this->sacar($valor);
            $conta->depositar($valor);
        } else {
            $this->erroTransacao();
        }
    }

    private function temSaldo(float $valor): bool
    {
        return $this->saldo >= $valor;
    }

    //Mensagem padrão para caso qualquer operação não seja realizada
    private function erroTransacao(): void
    {
        echo "Transação NÃO realizada" . PHP_EOL;
    }

    //Função para apresentar todos os atributos dessa classe
    public function getToString(): string
    {
        return  "Titular: $this->nomeTitular" . PHP_EOL .
                "CPF: $this->titularCpf" . PHP_EOL . 
                "Saldo R$ $this->saldo" . PHP_EOL;
    }

}
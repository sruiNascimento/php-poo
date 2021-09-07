<?php
class Conta
{
    //Definir os dados da classe Conta
    public string $titularCpf;
    public string $nomeTitular;
    public float $saldo;

    //Método para sacar
    public function sacar(float $valor): void
    {
        if ($this->temSaldo($valor)) {
            $this->diminuiValor($valor);
            echo "Saque realizado com sucesso" . PHP_EOL;
        } else {
            $this->erroTransacao();
        }
    }

    public function depositar(float $valor): void
    {
        if ($valor > 0) {
            $this->aumentaValor($valor);
        } else {
            $this->erroTransacao();
        }
    }

    public function transfere(Conta $conta, float $valor): void
    {
        if ($this->temSaldo($valor)) {
            $this->diminuiValor($valor);
            $conta->aumentaValor($valor);
        } else {
            $this->erroTransacao();
        }
    }

    private function temSaldo(float $valor): bool
    {
        return $this->saldo >= $valor;
    }

    private function aumentaValor($valor): void
    {
        $this->saldo += $valor;
    }

    private function diminuiValor($valor): void
    {
        $this->saldo -= $valor;
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





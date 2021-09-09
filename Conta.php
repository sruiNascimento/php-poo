<?php

require 'Titular.php';

class Conta
{
    //Definir os dados da classe Conta
    private Titular $titular;
    private float $saldo;
    //atributo static, pois é da classe 
    private static $totalContas = 0;
    //criando atributo código do banco
    private static $codigoBanco = 123;
    //Construtor
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        //Forma de acessa e manipular um atributo de classe
        //ClassName :: attr
        //Podemos chamos o nome da classo por self, ao invés de nome da classe
        //self ou Conta
        self::$totalContas++;
    }

    //Destruct irá apagar da memória, as instâncias que não tiverem referências
    //Ao final de toda a execução, ele irá apagar da memória todas as instâncias
    public function __destruct()
    {   
        echo "Instâncias sem referências" . PHP_EOL;
        self::$totalContas--;
    }

    //Getters e Setters

    public function getTitularCpf(): string 
    {
        return $this->titular->getCpf();
    }

    
    public function getNomeTitular(): string 
    {
        return $this->titular->getNome();
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
    //Método estático para poder acessar o número contas, pois a variável é da classe
    public static function getTotalContas(): int 
    {
        //self ou Conta
        return self::$totalContas;
    }

    public static function getCodigoBanco(): int 
    {
        return self::$codigoBanco;
    }
     
    //Método para sacar
    public function saca(float $valor): void
    {
        if ($this->temSaldo($valor)) {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso" . PHP_EOL;
        } else {
            $this->erroTransacao();
        }
    }

    public function deposita(float $valor): void
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
            $this->saca($valor);
            $conta->deposita($valor);
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
        return  "Código Banco: " . self::$codigoBanco . PHP_EOL .
                $this->titular->getToString() . 
                "Saldo R$ $this->saldo" . PHP_EOL;
    }

}
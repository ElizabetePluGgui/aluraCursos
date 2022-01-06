<?php
//O QUE É CLASSE E OBJETO? Classe é a forma de bolo. Objeto é o bolo em si. Quando criamos uma variável
// a partir de uma classe, estamos criando um objeto, e a classe é apenas o tipo deste objeto

//INFORMANDO AO PHP QUE OS DADOS INSERIDO TIPO CONTA É PUBLIC
//INFORMANDO QUE OS DADOS SÃO PUBLICOS E TODOS PODEM ACESSAR, NESSE CASO!
//OLHA PHP TODOS OS DADOS SÃO PUBLICOS

//No PHP, para acessarmos um atributo a partir de um objeto usamos uma "seta", representada por ->,
// como em $primeiraConta->saldo. Em CSS, isso significa o acesso a um ponteiro. Já no PHP, estamos acessando,
//dentre outras possibilidades, um atributo do objeto de determinado tipo. Podemos, por exemplo,
// informar $primeiraConta->saldo = 200.

//Que podemos definir tipos complexos com PHP através de classes
//Que objeto (ou instância) é o nome dado para cada valor gerado através de uma classe
//Que objetos possuem valores, e esses valores são chamados de atributos
//Que os atributos dos objetos são individuais, ou seja, não estão atrelados a todas as instâncias da mesma classe
//Que a palavra new é utilizada para criar um objeto, e devolve o endereço dele
//Este endereço é armazenado em uma variável, e através desta variável podemos acessar o objeto e seus atributos

//O encapsulamento ajuda a garantir que os nossos objetos se mantenham em um estado consistente,
//e também facilita o uso da nossa classe por outros desenvolvedores.

//Ao criar uma instância, o método mágico construtor (__construct) é executado
//Quando uma instância deixa de existir, seu método mágico destrutor (__destruct) é executado
//Podemos ter métodos privados em nossas classes, que nos ajudam a organizar o código
//Também podemos ter membros (atributos e métodos) da própria classe, e não de cada instância
//Membros da classe são chamados de membros estáticos

//Uma classe deve ter apenas uma responsabilidade, deve ser concisa
//É possível que um objeto tenha outro objeto como valor de um de seus atributos. Isto é chamado de composição
//A composição pode (e deve) ser utilizada ao definir uma estrutura complexa de classes


class Conta
{
    //PROPRIEDADES SEMPRE PRIVADAS || MÉTODOS PÚBLICOS
    private $cliente; //
    public $saldo; //ATRIBUTOS
    private static $numeroDeContas = 0; //ATRIBUTOS

    //MÉTODO CONSTRUTOR
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->saldo = 0;

        //Conta::$numeroDeContas++;
        //self interpreta o nome da classe sem precisar escrever ela no cod
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }//FIM destruct

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }//FIM Saca

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }//FIM deposita

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }//FIM transfere

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }//FIM recuperaSaldo

    public static function recuperaNumeroDeContas(): int
    {
        //return self::$numeroDeContas;
        return self::$numeroDeContas;
    }//FIM static recuperaNumeroDeContas

    public function recuperaNomeCliente(): string
    {
        return $this->cliente->recuperaNomeCliente();
    }//FIM recuperaNomeCliente

    public function recuperaCpfCliente(): string
    {
        return $this->cliente->recuperaCpfCliente();
    }//FIM recuperaCpfCliente

}
<?php
namespace Models;

class Funcionario extends Pessoa
{
    private $cargo;
    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeCliente($nome);
        $this->nome = $nome;
    }

    private function validaNomeCliente(string $nome)
    {
    }

}
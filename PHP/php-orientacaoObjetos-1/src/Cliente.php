<?php

class Cliente
{
    private $cpf;
    private $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeCliente($nome);
        $this->nome = $nome;
    }

    public function recuperaNomeCliente(): string
    {
        return $this->nome;
    }

    public function recuperaCpfCliente(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function validaNomeCliente(string $nomeCliente)
    {
        if (strlen($nomeCliente) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
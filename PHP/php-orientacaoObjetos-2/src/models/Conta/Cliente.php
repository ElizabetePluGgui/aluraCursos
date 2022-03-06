<?php
//O que é herança, que é o terceiro pilar da orientação a objetos;
//Vimos como a herança pode nos auxiliar com duplicação de código;
//Aprendemos que para acessar um membro da classe base, podemos utilizar parent;
//Conhecemos o modificador de acesso protected.
namespace Models\Conta;

class Cliente extends Pessoa
{
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
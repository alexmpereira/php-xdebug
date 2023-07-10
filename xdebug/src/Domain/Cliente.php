<?php

declare(strict_types=1);

namespace Alex\Phpxdebug\Domain;

use Exception;

class Cliente
{
  protected string $nome;
  protected int $idade;
  protected string $email;
  protected string $cpf;
  protected Endereco $endereco;

  public function populaCliente(array $cliente, Endereco $endereco)
  {
    $this->setNome($cliente["nome"]);
    $this->setIdade($cliente["idade"]);
    $this->setEmail($cliente["email"]);
    $this->setCpf($cliente["cpf"]);
    $this->endereco = $endereco;
  }

  public function imprimeDadosCliente(): array
  {
    return [
      "nome" => $this->nome,
      "idade" => $this->idade,
      "email" => $this->email,
      "cpf" => $this->cpf,
      "Message" => "Passou pela entidade",
      "endereco" => $this->endereco->imprimeEndereco()
    ];
  }

  public function setNome($nome)
  {
    $this->nome = $nome;

    if (empty($this->nome)) {
      throw new Exception("O campo nome não pode ser vazio", 500);
    }

    return $this;
  }

  public function setIdade($idade)
  {
    $this->idade = $idade;

    return $this;
  }

  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  public function setCpf($cpf)
  {
    $this->cpf = $cpf;

    return $this;
  }
}
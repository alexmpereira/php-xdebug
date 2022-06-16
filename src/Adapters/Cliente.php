<?php
declare(strict_types=1);

namespace Alex\Phpxdebug\Adapters;

use Alex\Phpxdebug\Domain\Cliente as DomainCliente;
use Alex\Phpxdebug\Domain\Endereco;

class Cliente
{
  protected DomainCliente $entity;

  public function __construct(array $cliente, Endereco $endereco)
  {
    $this->entity = new DomainCliente($cliente);
    $this->entity->populaCliente($cliente, $endereco);
  }

  public function imprimeDados(): array
  {
    return $this->entity->imprimeDadosCliente();
  }
}
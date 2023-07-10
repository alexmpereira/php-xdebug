<?php

use Alex\Phpxdebug\Adapters\Cliente;
use Alex\Phpxdebug\Domain\Endereco;

require_once __DIR__ . '/vendor/autoload.php';

$mockCliente = [
  "nome" => "Teste",
  "idade" => 20,
  "email" => "user@gmail.com",
  "cpf" => "52365412574"
];

$mockEndereco = [
  "endereco" => "Rua ....",
  "cidade" => "Umuarama",
  "numero" => 1003
];

// $mockClienteDois = [
//   "nome" => "Teste2",
//   "idade" => 20,
//   "email" => "user2@gmail.com",
//   "cpf" => "99999999999"
// ];

// $mockEnderecoDois = [
//   "endereco" => "Rua Dois",
//   "cidade" => "Cianorte",
//   "numero" => 104
// ];

try {
  $endereco = new Endereco($mockEndereco);
  $cliente = new Cliente($mockCliente, $endereco);
  $imprimeDados = json_encode($cliente->imprimeDados());
  echo $imprimeDados;

  // $enderecoDois = new Endereco($mockEnderecoDois);
  // $clienteDois = new Cliente($mockClienteDois, $enderecoDois);
  // $imprimeDadosDois = json_encode($clienteDois->imprimeDados());
  // echo $imprimeDadosDois;
} catch (\Exception $e) {
  return var_dump($e->getMessage());
}
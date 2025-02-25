<?php

namespace CleanCode\Arquitetura\Testes\Unidade\Dominio\Selo;

use CleanCode\Arquitetura\Dominio\Cpf;
use CleanCode\Arquitetura\Dominio\Selo\Selo;
use PHPUnit\Framework\TestCase;

class SeloTest extends TestCase
{
  public function testSeloeDevePoderSerRepresentadoComoString()
  {
    $selo = new Selo(new Cpf('123.456.789-10'), 'Novato');
    $this->assertSame('Novato', (string) $selo);
  }
}
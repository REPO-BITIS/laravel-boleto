<?php
namespace Eduardokum\LaravelBoleto\Contracts\Cnab;

interface Retorno extends Cnab
{
    public function processar();

    public function getDetalhes();

    public function getCodigoBanco();

    public function getBancoNome();
}

<?php
namespace src\poligonos;
use src\Poligonos;

class Retangulo
{
    protected $altura;
    protected $largura;
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }
    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }
    public function getlargura(): float
    {
        return $this->largura;
    }
    public function getAltura(): float
    {
        return $this->altura;
    }
}
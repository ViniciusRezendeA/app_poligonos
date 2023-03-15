<?php
namespace src\poligonos;
use src\Poligonos;
class Quadrado  
{   
    protected $altura;
    protected $largura;
    public function setLargura(float $largura): void
    {
        
        $this->largura = $largura;
        $this->altura = $largura;

    }
    public function getlargura(): float
    {
        return $this->largura;
    }
    public function getAltura(): float
    {
        return $this->altura;
    }
    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
        $this->largura = $altura;

    }
}

<?php
require __DIR__ . '/vendor/autoload.php';
use src\Poligono;
use src\poligonos\Retangulo;
use src\poligonos\Quadrado;
$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo $poligono->getArea();
?>
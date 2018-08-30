<?php

require_once('Cliente.php');
require_once('Cuenta.php');
require_once('CajaDeAhorro.php');


$kevin = new Cliente(1,'Ghio','37357767','20373756762');
$cajaDeAhorro = new CajaDeAhorro($kevin);

$cajaDeAhorro->depositar(10000);

echo $cajaDeAhorro->informarSaldo();
echo "<br>";
echo "<br>";
echo $cajaDeAhorro->extraer(8000);
echo "<br>";
echo "<br>";
echo "<br>";

var_dump($cajaDeAhorro);

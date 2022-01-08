<?php


require_once 'Caneta.php';

$ci = new Caneta;

$ci->cor= 'Azul';
$ci->ponta = '0.5';
$ci->tampada = false;

$ci->tampar();
$ci->destampar();




$c2 = new Caneta;

$c2->modelo = 'BIC 2.0';
$c2->cor = 'Verde';
$c2->ponta = '0.8';
$c2->tampada = false;


print_r($ci);
echo "<br>";
print_r($c2);
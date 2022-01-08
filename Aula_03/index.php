<?php

require_once 'Caneta.php';

$c1 = new Caneta;

$c1->modelo = 'BIC cristal';
/* $c1->cor = 'Azul';
$c1->carga = 90; 
$c1->tampada = true; */

$c1->destampar();
$c1->rabiscar();
print_r($c1);
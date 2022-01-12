<?php

require_once 'Pessoa.php';
require_once 'Livro.php';

$p[0] = new Pessoa('Ian', 17, 'M');

$p[1] = new Pessoa('Maria', 28, 'F');

$l[0] = new Livro('PHP Básico', 'José da Silva', 300, $p[0]);
$l[1] = new Livro('POO com PHP', 'Maria de Souza', 500, $p[1]);
$l[2] = new Livro('POO Avançado', 'Maria de Souza', 328, $p[1]);

print_r($l[0]);

$l[0]->folhear(88);
$l[0]->avancarPag();
$l[0]->voltarPag();
$l[0]->detalhes();


$l[1]->folhear(33);
$l[1]->avancarPag();
$l[1]->detalhes();
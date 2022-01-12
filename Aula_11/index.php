<?php

require_once 'Aluno.php';

require_once 'Bolsista.php';


$a = new Aluno();

$a->setNome('Ian');
$a->pagarMensalidade();

$b = new Bolsista();

$b->setNome('Fernando');
$b->setCurso('Adm');
$b->setMatricula(234242);
$b->pagarMensalidade();

print_r($a);

print_r($b);
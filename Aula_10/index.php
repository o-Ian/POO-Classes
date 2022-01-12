<?php

require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Funcionario.php';
require_once 'Pessoa.php';


$p1 = new Pessoa;
$p2 = new Aluno;
$p3 = new Professor;
$p4 = new Funcionario;

$p1->setNome('Pedro');
$p2->setNome('Maria');
$p3->setNome('Cláudio');
$p4->setNome('Faniana');

$p2->setCurso('POO com PHP');
$p3->setEspecialidade('Matemática');
$p3->setSalario(3000);

$p1->setSexo('M');
$p2->setSexo('F');

$p2->cancelarMatr();
$p4->setSetor('Almoxarifado');

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);
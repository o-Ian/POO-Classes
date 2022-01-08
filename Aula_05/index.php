<?php

include_once 'ContaBanco.php';

$conta = new ContaBanco('CP');

$conta->abrirConta();

$conta->depositar(1245);

$conta->setDono('Ian');

$conta->sacar(290);

$conta->pagarMensal();

$conta->sacar(1085);

$conta->fecharConta();

print_r($conta);

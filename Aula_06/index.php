<h1>Projeto controle remoto!</h1>
<?php

require_once ('ControleRemoto.php');

$controle = new ControleRemoto;

$controle->maisVolume();

$controle->ligar();

$controle->abrirMenu();

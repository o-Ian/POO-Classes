<?php

require_once 'Lutador.php';
require_once 'Luta.php';


$l = [];

$l[0] = new Lutador("Pretty Boy", "França", 30, 1.72, 68.9, 11, 2, 1);

$l[1] = new Lutador("Putscript", "Brasil", 26, 1.78, 57.8, 14, 2, 3);

$l[2] = new Lutador("Fernando", "Noruega", 41, 1.65, 45, 8, 1, 3);

$l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

$l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.93, 93, 5, 4, 3);

$l[5] = new Lutador("Nerdart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

$UEC01 = new Luta;


$UEC01->marcarLuta($l[4], $l[5]);

$UEC01->lutar();

$l[4]->status();

$l[5]->status();
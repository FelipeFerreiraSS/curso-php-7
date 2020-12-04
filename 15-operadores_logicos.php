<?php
/*
      Operadores logicos
nos permitem fazer comparações entre expressões
e ( && - and) =>>> retorna verdadeiro quando as duas são verdadeiras

ou ( || - or)  =>>> retorna verdadeiro se pelo menos uma vor verdadeiro

ou exclusivo (xor) =>>> quanto apenas uma expreção for verdadeia. ou é um ou é outro

negação (!)  =>>>> inverte o estado logico da expreção 
*/

$idade = 25;
$nome = "Felipe";

if(($idade == 25) and ($nome == "Felipe")):
	echo "é verdadeiro";
else:
	echo "é falso";
endif;

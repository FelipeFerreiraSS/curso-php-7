<?php
/*
Condicionais
if
else 
elseif
*/

$numero = 8;

if ($numero == 10):
	echo "é igual a 10";
elseif ($numero <= 9):
	echo "é menor ou igual de 9";
else:
	echo "é diferente de 10";
endif;

echo "<hr>";
// operador tenario

$media = 7;
echo ($media >= 7) ? "Aprovado!" : "Reprovado!"; 

echo "<hr>";
/*
 Condicionais
 switch
 case
*/

 $cor = "vdsdsg";

 switch ($cor):
 	case 'vermelho':
 	 	echo "Sua cor preferita é vermelho";
 		break;

 	case 'verde':
 		echo "sua cor favorita é verde";
 		break;

 	case 'azul':
 		echo "sua cor favorita é azul";
 		break;

 	default:
 		echo "sua cor preferida não é vermelho nem verde nem azul";

 endswitch;
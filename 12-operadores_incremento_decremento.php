<?php

/*
Operadores de incremento e decremento

servem para somar e subtrair em (+1 ou -1) qualquer valor do tipo ou string.
*/

$valor = 20;

//pré-incremento
echo ++$valor;   //encrementa no valor

//pós-incremento
echo $valor++;  //(retorna o valor depois encrementa)
echo "<br>";
echo $valor;

//pré-decremento
echo --$valor;  //tira um do valor

//pós-decremento
echo $valor--;  //retorna o primeiro valor e depois decremento
echo "<br>";
echo $valor;

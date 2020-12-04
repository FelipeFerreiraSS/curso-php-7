<?php

//********************* is_array

$nomes = array("Felipe", "João", "Maria");

if(is_array($nomes)):
	echo "é um array";
else:
	echo "não é um array";
endif;

echo "<hr>";
//******************* in_array (se um valor existe no array)

if (in_array("Felipe", $nomes)):
	echo "existe no array";
else:
	echo "não existe";
endif;

echo "<hr>";
//******************** array_keys (retorna um novo array com as chaves do passado)

$keys = array_keys($nomes);
print_r($keys);

echo "<hr>";
//******************** array_values (retorna um novo array com o valor do passado como parametro)

$values = array_values($nomes);
print_r($values);

echo "<hr>";
//****************** array_merge (agrega conteudo de dois arrays)

$carros = array("camaro", "uno", "gol");

$merge = array_merge($carros, $nomes);
print_r($merge);

echo "<hr>";
//********************** array_pop (apaga a ultimo elemento do array)

array_pop($carros);
print_r ($carros);

//******************** array_shift (apaga o primeiro elmento do array )

array_shift($carros);
print_r($carros);

echo "<hr>";
//******************* array_unshift (adiciona um elemento no começo do array)

$frutas = array("uva", "laranja", "maçã");
print_r($frutas);
array_unshift($frutas, "manga", "morango");
print_r($frutas);

echo "<hr>";
//********************* array_push (adiciona elementos no final do array)
$frutas = array("uva", "laranja", "maçã");
print_r($frutas);
array_push($frutas, "manga", "morango");
print_r($frutas);

echo "<hr>";
//******************* array_combine (mescla dois arrays)

$keyss = array("Campeão", "Vice", "terceiro");
$valuess = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keyss, $valuess);
print_r($times);

echo "<hr>";
//****************** array_sum (calcula os elementos de um array)

$soma = array(3,4,5,6,7,8,3,2,);
echo array_sum($soma);


echo "<hr>";
//**************** explode (transforma uma estring em um array)

$data = "04/12/2020";
$novaData = explode("/", $data);
print_r($novaData);


$frase = "meu nome não é João";
$array = explode(" ", $frase);
print_r($array);

echo "<hr>";
//**************** implode (transforma um array em uma string)

$nomess = array("Rodrigo", "Carlos", "João", "Maria");
$string = implode(", ", $nomess);
echo $string;

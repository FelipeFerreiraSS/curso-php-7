<?php

// funções para números

//****************** nunber_format (formatação de numeros)

$db = 1234.76;

$preco = number_format($db, 2, ",", ".");
echo "o valor é $preco";

echo "<hr>";
//****************** roud (arredondar valores)

echo round(3.7);  

echo "<hr>";
//***************** ceil (arredonda valores para "cima")

echo ceil(8.1);

echo "<hr>";
//****************** floor (arredonda valores para "baixo")

echo floor(90.99);

echo "<hr>";
//***************** (gera numeros aleatorios)

echo rand(1,20);

<?php

// funçoes para strings

//*************** strtoupper (Todas as letras em maiusculas)

$nome = "felipe ferreira";
$novoNome = strtoupper($nome);
echo $novoNome;

//************** strtolower (Todas as letras em minusculas)

$nome = "FELIPE FERREIRA";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<hr>";
//******************* substr (retorna uma parte de uma string)

$mensagem = "ola mundo!";
echo substr($mensagem, 4);

echo "<hr>";
//******************** str_pad (complementa uma outra string com uma quantidade de caracteris)

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_RIGHT);
echo $novoObjeto;

echo "<hr>";
//******************* str_repeat (repite uma string)

$string = str_repeat("sucesso ", 6);
echo $string;

echo "<hr>";
//****************** strlen (retorna o comprimento de uma string)

$mensagemm = "ola mundo";
echo strlen($mensagemm);

echo "<hr>";
//******************* str_replece (subistitui palavra em um texto)

$texto = "A seleção canadense sera a nova campeã do mundo";
$novoTexto = str_replace("canadense", "brasileira", $texto); 
echo $novoTexto;

echo "<hr>";
//******************** strpos (retorna a posição de uma palavra em um texto)

echo strpos($texto, "nova");
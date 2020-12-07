<?php

/*
// base64 Criptografia de mão dupla criptografa e descriptografa

$senha = "12345";

$novasenha = base64_encode($senha);
echo "Base64: ".$novasenha."<br>";
echo "Sua senha é:". base64_decode($novasenha); 

echo "<hr>";

// Criptografias de mão unica

echo "Md5: ". md5($senha)."<br>";
echo "Sha1: ". sha1($senha);
*/

// Como criar hash seguros

$senha = "12345";


$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;
<?php

// Sessoes sevem para armasenar informaçoes que serão usados em varia paginas (carrinho de compras, sistema de login) (no inicio de todas as paginas deve iniciar com session_start) ( para limpar sessão= session_unset(); e para destruir a sessão session_destroy();  ) 

session_start();

$_SESSION['cor'] = "verde";
$_SESSION['carro'] = "Camaro";

echo $_SESSION['cor']."<br>".$_SESSION['carro'];
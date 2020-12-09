<?php

// COOKIE
// nome ,,  valor do cookie,, validade em segundos ||| coloque - no lugar do + para remover o cookie

setcookie('user', 'Felipe', time()+3600);

setcookie('email', 'felipe@gmail.com', time()+3600);

setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);
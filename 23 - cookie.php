<?php
setcookie('user', 'Lucas Dutra', time()+3600);
setcookie('email', 'lucasfelipedutra@gmail.com', time()+3600);
// setcookie('email', 'lucasfelipedutra@gmail.com', time()-3600); // remove o cookie

setcookie('ultima_pesquisa', 'televisão', time()+3600);

print_r($_COOKIE);

echo $_COOKIE['user'];

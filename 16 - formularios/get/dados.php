<?php
// os dados de index.php foram passados para esse arquivo atraves da url, logo são visiveis a todos
// o resultado da url foi: http://localhost/projetos/16%20-%20formularios/get/dados.php?nome=lucas&email=lucasfelipedutra%40gmail.com&enviar=Submit

$nome = $_GET['nome'];
$email = $_GET['email'];

echo "seu nome é: $nome, e seu email é: $email";

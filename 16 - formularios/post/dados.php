<?php
// os dados de index.php foram passads para esse arquivo de forma invisivel atraves do post (estão no body)

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "seu nome é: $nome, e seu email é: $email";

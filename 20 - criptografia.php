<?php
$senha = '123456';

// base64 mão dupla
$novasenha = base64_encode($senha);
echo "base64 encode: ".$novasenha;
echo '<br>';
echo "base64 decode: ".base64_decode($novasenha);
echo '<br>';
// mão unica
//md5
echo "md5: ".md5($senha)."<br>";
//sha1
echo "sha1: ".sha1($senha)."<br>";

// tanto o md5 quanto o sha1 já são meio batidos, e eles sempre geram os mesmos hashs para uma dada combinação de numeros, logo tem como fazer um banco
// de dados com as senhas, veja o site `https://crackstation.net/`.

// para gerar hashs seguras, que mudam sempre

$senhasegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhasegura."<br>";

// o problema aqui é que como elas mudam sempre, como fazer para comparar com uma senha cadastrada? vamos fazer o seguinte

$senha_db = '$2y$10$/y6suEoSQ7TaJH7wk4uZdO0QymHe/DVrTflbD1HrU4GRSbozwimQS';

if(password_verify($senha, $senha_db)){
  echo 'senha valida';
} else {
  echo 'senha invalida';
}

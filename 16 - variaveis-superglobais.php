<?php
//lembra que em 06 - escopo-de-variavies a gente viu que as variaveis possuem escopos muito bem definidos? então, agora temos como já definir
// uma variável como super global para que assim elas sejam acessiveis a todo o codigo.

//$GLOBALS -> serve para acessar variaveis globais de qualquer lugar do script
echo "$GLOBALS<br>";
$x = 10;
$y = 15;
function soma() {
  echo $GLOBALS["x"] + $GLOBALS["y"];
}
soma();
echo "<br><hr>";

//$_SERVER -> possui informações de indices (confira a documentação para entender melhor o que essav variavel pode fazer)
echo "$_SERVER<br>";
echo $_SERVER['PHP_SELF']; //retorna o nome do excript que esta sendo executado
echo "<br><hr>";

//$_POST
echo "$_POST<br>";
echo "ver na pasta 16 - formularios<br>";
echo "<br><hr>";

//$_GET
echo "$_GET<br>";
echo "ver na pasta 16 - formularios<br>";
echo "<br><hr>";

//$_FILES
echo "$_FILES<br>";
echo "ver na pasta 17 - upload<br>";
echo "<br><hr>";

//$_ENV
echo "$_ENV<br>";

echo "<br><hr>";

//$_COOKIE
echo "$_COOKIE<br>";

echo "<br><hr>";

//$_SESSION
echo "$_SESSION<br>";

echo "<br><hr>";

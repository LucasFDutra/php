<?php
$numero1 = 10;
$numero2 = 30;

//AND (and, &&)
echo 'and<br>';
if($numero1 === 10 and $numero2 === 30) {
  echo "1 - verdade";
}
echo '<br>';
if($numero1 === 10 && $numero2 === 30) {
  echo "2 - verdade";
}
echo '<hr>';

//OR (or, ||) //ao menos uma expressão tem que ser verdadeira
echo 'or<br>';
if($numero1 > 15 or $numero2 >15) {
  echo "1 - um ou os dois são maiores que 15";
}
echo '<br>';

if($numero1 > 15 || $numero2 >15) {
  echo "2 - um ou os dois são maiores que 15";
}
echo '<hr>';

//XOR - ou exclusivo (xor) //somente uma expressão pode ser verdadeira
echo 'xor<br>';
if($numero1 > 15 xor $numero2 >15) {
  echo "somente um dos dois é maior que 15";
}
echo '<hr>';

//NEGAÇAO (!)
echo 'negação<br>';
if(!($numero1 > 15)) {
  echo 'o numero não é maior que 15';
}
echo '<hr>';

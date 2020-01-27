<?php

$array1 = array(0,1,2,3,4);
echo 'for sintax 1<br>';
for ($i=0; $i < count($array1); $i++) {
  echo "$array1[$i]<br>";
}

echo '<hr>';

echo 'for sintax 2<br>';
for ($i=0; $i < count($array1); $i++):
  echo "$array1[$i]<br>";
endfor;

echo '<hr>';

echo 'foreach sintax 1<br>';
foreach ($array1 as $i) {
  echo "$i<br>";
}

echo '<hr>';

echo 'foreach sintax 2<br>';
foreach ($array1 as $i):
  echo "$i<br>";
endforeach;

echo '<hr>';

echo 'foreach exibindo indices<br>';
foreach ($array1 as $index => $i) {
  echo "valor $i está no indice $index<br>";
}

echo '<hr>';

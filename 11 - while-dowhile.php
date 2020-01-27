<?php
//sintax 1
echo 'while sintax 1 <br>';
$cont = 0;
while ($count < 10) {
  echo "$count <br>";
  $count++;
}
echo '<hr>';

//sintax 2
echo 'while sintax 2 <br>';
$count = 0;
while ($count < 10):
  echo "$count <br>";
  $count++;
endwhile;
echo '<hr>';

//do while
echo 'do while <br>';
$count = 0;
do {
  echo "$count <br>";
  $count ++;
} while ($count < 10);
echo '<hr>';

//dowhile vs while
echo 'dowhile vs while <br>';
echo 'do while <br>';
$count = 0;
do {
  echo "$count <br>";
} while ($count < 0);

echo '<br>';

echo 'while <br>';
$cont = 0;
while ($count < 0) {
  echo "$count <br>";
}

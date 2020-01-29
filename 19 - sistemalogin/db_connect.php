<?php
$credentials = file_get_contents('../credentials.json');
$credentials = json_decode($credentials);

$servername = "localhost";
$username = $credentials->username;
$password = $credentials->password;
$db_name = 'sistemalogin';

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()){
  echo "falha na conexão: ".mysqli_connect_error();
}

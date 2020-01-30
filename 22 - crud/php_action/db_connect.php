<?php
  $credentials = file_get_contents('/var/www/html/projetos/credentials.json');
  $credentials = json_decode($credentials);

  $serverName = 'localhost';
  $username = $credentials->username;
  $password = $credentials->password;
  $db_name = 'crud';
  $tableName = 'clientes';

  $connect = mysqli_connect($serverName, $username, $password);

  $errors = array();

  if(!$connect){
    $errors[] = "<li>connection failed: ".mysqli_connect_error()."</li>";
  } else {
    $sql = "CREATE DATABASE IF NOT EXISTS $db_name";
    if (mysqli_query($connect, $sql)) {
      // echo "<li>database created successfully</li>";
    } else {
      $errors[] = "<li>error creating database: ".mysqli_error($connect)."</li>";
    }
  }


  $connect = mysqli_connect($serverName, $username, $password, $db_name);
  mysqli_set_charset($connect, "utf8");

  if(!$connect){
    $errors[] = "<li>connection failed: ".mysqli_connect_error()."</li>";
  } else {
    $sql = "CREATE TABLE IF NOT EXISTS $tableName(
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nome VARCHAR(255) NOT NULL,
      sobreNome VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      idade INT NOT NULL
    ) DEFAULT CHARSET=utf8";
    if(mysqli_query($connect, $sql)){
      // echo "<li>table created successfully</li>";
    } else {
      $errors[] = "<li>error cheating table: ".mysqli_error($connect)."</li>";
    }
  }

  if(!empty($errors)){
    foreach ($errors as $error) {
      echo $error;
    }
  }

  mysqli_close();
?>

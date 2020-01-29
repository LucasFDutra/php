<?php
  require_once 'db_connect.php';
  session_start();

  $logado = $_SESSION['logado'];
  $id = $_SESSION['id_usuario'];

  if($logado){
    $sql = "SELECT nome FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
  } else {
    header('Location: index.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pagina restrita</title>
</head>
<body>
  <p>olá <?php echo $dados['nome']; ?> </p>
  <p> bem vindo a essa pagina restrita </p>
  <a href="logout.php">Logout</a>
</body>
</html>

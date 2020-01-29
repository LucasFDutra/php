<?php
  require_once 'db_connect.php';
  session_start();

  if(isset($_POST['btn-entrar'])){
    $erros = array();
    //aplicar um filtro de segurança para evitar que a entrada do usuario seja um comando sql. por exemplo:
    // como fazemos uma query utilizando $login como parametro, se alguem passar o login como sendo '105 OR 1=1'
    // mesmo que o usuario 105 não exista o 1 é sempre igual a 1, logo a query sera executada e todos os dados do banco serão retornados
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)){
      $erros[] = "<li>os capos login e senha precisam ser preenchidos</li>";
    } else {
      $sql = "SELECT login FROM usuarios WHERE login = '$login'";
      $resultado = mysqli_query($connect, $sql);
      if(mysqli_num_rows($resultado) > 0){
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);
        mysqli_close($connect);
        if(mysqli_num_rows($resultado) == 1){
          $dados = mysqli_fetch_array($resultado);
          $_SESSION['logado'] = true;
          $_SESSION['id_usuario'] = $dados['id'];
          header('Location: home.php');
        } else {
          $erros[] = "<li>usuario e senha incorretos</li>";
        }
      } else {
        $erros[] = "<li>usuario inexistente</li>";
      }
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login</title>
</head>
<body>
  <h1>Login</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name='senha'><br>
    <button type='submit' name='btn-entrar'>Entrar</button>
  </form>
  <?php
    if(!empty($erros)){
      foreach ($erros as $erro) {
        echo "<p>$erro</p>";
      }
    }
  ?>
</body>
</html>

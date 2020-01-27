<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
  //não está dando certo aqui
    if(isset($_POST['enviar-formulario'])){
      $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
      $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

      if(in_array($extensao, $formatosPermitidos)){
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";
        if(move_uploaded_file($temporario, $pasta.$novoNome)){
          echo "upload feito com sucesso";
        } else {
          echo "não foi possivel fazer upload";
        }

      } else {
        echo "não existe";
      }
    }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" name="enviar-formulario">
  </form>
</body>
</html>

<?php
  require_once 'db_connect.php';

  if(!$connect) {
    echo "Connection failed: " . mysqli_connect_error();
    } else {
      $sql = "INSERT INTO $tableName (nome, sobreNome, email, idade) VALUES ('Lucas', 'Dutra', 'lucasfelipedutra@gmail.com', 24)";
      if(mysqli_query($connect, $sql)){
        // echo "<li>Insert item</li>";
      } else {
        echo "Error: ".$sql."<br>".mysqli_error($connect);
      }
  }
?>

<?php
  include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
  <h3 class="light">Clients</h3>
    <table class="striped">
      <thead>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>Idade</th>
      </thead>
      <tbody>
        <tr>
          <td>Lucas</td>
          <td>Dutra</td>
          <td>lucasfelipedutra@gmail.com</td>
          <td>24</td>
          <td> <a href="" class="btn-floating blue"> <i class="material-icons">edit</i> </a> </td>
          <td> <a href="" class="btn-floating red"> <i class="material-icons">delete</i> </a> </td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="" class="btn blue">Adicionar Cliente</a>
  </div>
</div>

<?php
  include_once 'includes/footer.php';
?>



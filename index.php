<?php
 include('./librerias/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 style="text-align: center;">Datos recuperados de la BBDD</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Correo</th>
      <th scope="col">Password</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql= "SELECT * FROM users";
      $result = mysqli_query($link,$sql);

      if (!$result) {
        echo "La tabla está vacía";
      }
      else{
        while($row = mysqli_fetch_array($result)){
          echo ' <tr>
      <th scope="row">'.$row["id"].'</th>
      <td>'.$row["email"].'</td>
      <td>'.$row["password"].'</td>
      <td>'.$row["name"].'</td>
    </tr>';
        }
      }
    ?>

    
  </tbody>
</table>
</div>

</body>
</html>

<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
  if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else{
    $resultado = $conexion->query("SELECT * FROM partido");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
    </nav>

  <body>
    <table>
      <tr>
        <td><i><b>Id</b></i></td>
        <td><i><b>Local</b></i></td>
        <td><i><b>Visitante</b></i></td>
        <td><i><b>Resultado</b></i></td>
      </tr>
      <?php
        foreach ($resultado as $partido) {
          echo "<tr>";
            echo "<td>".$partido['id_partido']."</td>";
            echo "<td><a href='equipos.php?idEquip=".$partido['local']."'>".$partido['local']."</a></td>";
            echo "<td><a href='equipos.php?idEquip=".$partido['visitante']."'>".$partido['visitante']."</a></td>";
            echo "<td>".$partido['resultado']."</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>

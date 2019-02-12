<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $id=$_GET["idEquip"];
  $resultado = $conexion->query("SELECT * FROM equipo WHERE id_equipo=".$id);
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
    </nav>


  </head>
  <body>
    <table>
      <tr>
        <td><i><b>Id</b></i></td>
        <td><i><b>Nombre</b></i></td>
        <td><i><b>Ciudad</b></i></td>
        <td><i><b>Web</b></i></td>
        <td><i><b>Puntos</b></i></td>
      </tr>
      <?php
     foreach ($resultado as $equipo) {
       echo "<tr>";
       echo "<td><a href='jugadores.php?idJugador=".$equipo['id_equipo']."'>".$equipo['id_equipo']."</a></td>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<td>".$equipo['ciudad']."</td>";
        echo "<td>".$equipo['web']."</td>";
        echo "<td>".$equipo['puntos']."</td>";
       echo "</tr>";
     }
   ?>
    </table>
  </body>
</html>

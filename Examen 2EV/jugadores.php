<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $id=$_GET["idJugador"];
  $resultado = $conexion->query("SELECT * FROM jugador WHERE equipo=".$id);
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
        <td><i><b>Apellido</b></i></td>
        <td><i><b>Posicion</b></i></td>
        <td><i><b>Id Capitan</b></i></td>
        <td><i><b>Fecha Alta</b></i></td>
        <td><i><b>Salario</b></i></td>
        <td><i><b>Equipo</b></i></td>
        <td><i><b>Altura</b></i></td>
      </tr>
      <?php
     foreach ($resultado as $jugador) {
       echo "<tr>";
        echo "<td>".$jugador['id_jugador']."</td>";
        echo "<td>".$jugador['nombre']."</td>";
        echo "<td>".$jugador['apellido']."</td>";

          if ($jugador['posicion'] == "Base") {
            echo "<td><b>".$jugador['posicion']."</b></td>";
          }
          else {
            echo "<td>".$jugador['posicion']."</td>";
          }

        echo "<td>".$jugador['id_capitan']."</td>";
        echo "<td>".$jugador['fecha_alta']."</td>";
        echo "<td>".$jugador['salario']."</td>";
        echo "<td>".$jugador['equipo']."</td>";
        echo "<td>".$jugador['altura']."</td>";
       echo "</tr>";
     }
   ?>
    </table>
  </body>
</html>

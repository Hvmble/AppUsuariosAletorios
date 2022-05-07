<?php
// variables de entorno para la conexion bd
$host = 'localhost';
$user = 'root';
$pwd = '';
$database = 'database';
 // se genera la conexion
$conectar = mysqli_connect($host, $user, $pwd, $database);
//validacion  de la conexion con la bd
if ($conectar->connect_errno) {
  echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
  //echo $conectar->host_info . "\n";

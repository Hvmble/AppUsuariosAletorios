<?php
function randomUser()
{
  require 'config/conexion.php';
  $datos = curl_init(); //inicializar una sesión cURL 
  curl_setopt($datos, CURLOPT_URL, "https://randomuser.me/api/?results=10&inc=gender,name,location,email,phone,registered"); // Establece la sesión del recurso cURL.-- Dirección URL a capturar
  curl_setopt($datos, CURLOPT_RETURNTRANSFER, true);// devolver el resultado de la transferencia y convertirlo en variable
  $respuesta = curl_exec($datos);  //Establece una sesión cURL
  curl_close($datos); //cierra la sesion CURL
  $valores = json_decode($respuesta, true);//Decodifica un string de JSON
  $response = $valores['results'];
  foreach ($response as $datos) {
    $nombre = $datos['name']['first'];
    $apellido = $datos['name']['last'];
    $edad = $datos['registered']['age'];
    $genero = $datos['gender'];
    $telefono = $datos['phone'];
    $correo = $datos['email'];
    $ciudad = $datos['location']['city'];
    //echo  $nombre . " " . $apellido . " " . $genero . " " . $telefono . " " . $correo . " " . $ciudad . " " . $edad;
    $query = "INSERT INTO users (user_nombre,user_apellido,genero,edad,telefono,correo,ciudad) VALUES('$nombre', '$apellido','$genero','$edad','$telefono','$correo','$ciudad')";
    $save = mysqli_query($conectar, $query);
    echo $save;
  }
}
randomUser();

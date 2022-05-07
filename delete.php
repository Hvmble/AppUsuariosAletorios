<?php
require 'config/conexion.php';
if (isset($_GET['user_id'])) {
  $user_id = $_GET['user_id'];
  $query = "DELETE FROM users WHERE user_id = $user_id";
  $result = mysqli_query($conectar, $query);
  header("Location: /");
}

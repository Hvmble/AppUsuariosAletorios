<?php
require 'config/conexion.php';
// Se consultan los datos a actualizar
if (isset($_GET['user_id'])) {
  $user_id = $_GET['user_id'];
  $query = "SELECT * FROM users WHERE user_id=$user_id";
  $response = mysqli_query($conectar, $query);
  if (mysqli_num_rows($response) == 1) {
    $user = mysqli_fetch_array($response);
    $nombre = $user['user_nombre'];
    $apellido = $user['user_apellido'];
    $genero = $user['genero'];
    $telefono = $user['telefono'];
    $correo = $user['correo'];
    $ciudad = $user['ciudad'];
  }
}
if (isset($_POST['update'])) {
    $user_id = $_GET['user_id'];
    $nombre = $_POST['user_nombre'];
    $apellido = $_POST['user_apellido'];
    $genero = $_POST['genero'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email'];
    $ciudad = $_POST['ciudad'];
  $query = "UPDATE users set user_nombre = '$nombre', user_apellido = '$apellido',genero= '$genero' ,telefono = '$telefono',correo = '$correo',ciudad = '$ciudad'  WHERE user_id=$user_id";
  mysqli_query($conectar, $query);
  header("Location: /");
}

?>
<?php include 'includes/header.php'; ?>
<div class="container">
  <div class="card mt-5 mx-auto"style="width: 40rem";>
    <div class="card-header">
      <h2 class="text-center">Actualizar Usuario</h2>
    </div>
    <div class="card-body">
      <form action="edit.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input value="<?= $user['user_nombre'] ?>" type="text" name="user_nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Apellido</label>
          <input value="<?= $user['user_apellido'] ?>" type="text" name="user_apellido" id="apellido" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Genero</label>
          <input value="<?= $user['genero'] ?>" type="text" name="genero" id="genero" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Edad</label>
          <input value="<?= $user['edad'] ?>" type="text" name="edad" id="edad" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Telefono</label>
          <input value="<?= $user['telefono'] ?>" type="text" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $user['correo'] ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Ciudad</label>
          <input value="<?=  $user['ciudad'] ?>" type="text" name="ciudad" id="ciudad" class="form-control">
        </div>
        <div class="form-group text-center">
          <button type="submit" name="update" class="btn mt-4 btn-warning text-white">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
<?php
include 'includes/header.php';
require 'config/conexion.php';
?>
<!-- Hero section -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Usuarios Aletorios</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Este sistema te permite generar usuarios aletorios y su información básica con un solo clic</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Ir</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section><!-- End Hero -->
<main id="main">
  <!-- Table section  -->
  <section id="about" class="about">
    <div class="container">
      <div class="card mt-5">
        <div class="card-header">
          <h2 class="text-center">Usuarios</h2>
          <a class="btn btn-primary text-white" onclick="randomUser()" role="button">Generar Usuarios</a>
        </div>
        <div class="card-body">
          <div class="table table-light">
            <table id="table-usuarios" class="table table-striped">
              <thead>
                <tr class="text-center">
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Genero</th>
                  <th>Edad</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Ciudad</th>
                  <th class="w-5 text-center">Accion</th>
                </tr>
              </thead>
              <tbody>
                <?php $query = 'SELECT * FROM users';
                $response = mysqli_query($conectar, $query);
                // Recorre coleccion de los usuarios consultados
                while ($user = mysqli_fetch_assoc($response)) { ?>
                  <tr class="text-center">
                    <td><?= $user['user_nombre'] ?></td>
                    <td><?= $user['user_apellido'] ?></td>
                    <td><?= $user['genero'] ?></td>
                    <td><?= $user['edad'] ?></td>
                    <td><?= $user['telefono'] ?></td>
                    <td><?= $user['correo'] ?></td>
                    <td><?= $user['ciudad'] ?></td>
                    <td class="d-flex justify-content-center">
                      <a href="edit.php?user_id=<?= $user['user_id'] ?>" class="btn mx-2 btn-warning text-white">Editar</a>
                      <a onclick="return confirm('Está seguro de borrar este Usuario: <?= $user['user_nombre'] ?> ?')" href="delete.php?user_id=<?= $user['user_id'] ?>" class='btn btn-danger'>Borrar</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section><!-- Table section -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
    // funcion Ejecutar codigo del archivo create para consumir e insertar datos
    function randomUser() {
      $.ajax({
        url: "create.php",
        success: function() {
          location.reload();
        }
      })
    }
  </script>
  <?php
  include 'includes/footer.php';
  ?>
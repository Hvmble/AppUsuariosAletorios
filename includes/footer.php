<!-- ======= FOOTER ======= -->
<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <img class="img-fluid" width="200px" src="/assets/img/logo_aicoll.png" alt="">
        </a>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="credits">
    Diseñado por <a href="https://www.aicoll.co/#">Aicoll</a>
  </div>
  <div class="copyright">
    &copy; Copyright <strong><span>Usuarios Aleatorios</span></strong>. All Rights Reserved
  </div>
</div>
</script>
<!-- Jquery, boostrap, librerias -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- Js principal -->
<!-- Datables js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
  $(document).ready(function() {
    $('#table-usuarios').DataTable({

      "order": [
        [0, "desc"]
      ],
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado - lo siento",
        "info": "Página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(Fitrado de _MAX_ registros totales)",
        "search": "Buscar:",
        "paginate": {
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      lengthMenu: [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "Todos"]
      ]
    });
  });
</script>
</body>

</html>
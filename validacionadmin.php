<?php 
  $msg = null;
  if (isset($_REQUEST ['err'])) {
    $msg = $_REQUEST['err'];
  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo5.png">

  <title>Cambio de contraseña</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="awesome/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="cambio.css">

</head>

<body>
  <?php 
    if($msg != null){
      echo "
        <script>
          Swal.fire({
            type: 'warning',
            icon:'warning',
            title: '$msg',
            timer: 2000
            });
        </script>";
      }
     ?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password"><img src="img/7.jpg" height="100%" width="100%"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                    <p class="mb-4">Por favor ingrese su usuario.</p>
                  </div>
                  <form class="user needs-validation" action="5.php" method="POST" novalidate>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="numerodedocumento" id="numerodedocumento" aria-describedby="emailHelp" placeholder="Usuario" minlength="8" required>
                      <div class="invalid-feedback">
                       Campo vacio.
                      </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-user btn-block">
                      Verificar
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="principal.php"><i class="fa fa-reply"></i> Regresar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="jquery/jquery-3.5.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="codigologin1.js"></script>
</body>

</html>
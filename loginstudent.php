<?php 
  $msg = null;
  if (isset($_REQUEST ['err'])) {
    $msg = $_REQUEST['err'];
  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>iniciar sesión: Estudiante</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" href="img/logo5.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet"  href="bellezalogin.css">

</head>

<body>

  <div class="container">
    <?php 
            if($msg != null){
              echo "
                <script>
                  Swal.fire({
                    type: 'error',
                    icon: 'error',
                  title: '$msg',
                  showConfirmButton:false,
                  timer:'3000',
                  });
                </script>";
              }
             ?>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-4 col-lg-4 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" id="login">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h5 mb-4">Bienvenido Estudiante</h1>
                  </div>

                    <form action="estudiante.php"  method="post" class="user needs-validation" novalidate>
                      <div class="form-group">
                        <input type="text" name="numerodedocumento" class="form-control form-control-user" id="numerodedocumento" aria-describedby="emailHelp" placeholder="Usuario" required>
                        <div class="invalid-tooltip"></div>
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Contraseña" required>
                         <div class="invalid-tooltip"></div>
                      </div>
                      <button class="btn btn-warning btn-user btn-block" type="submit">
                        Iniciar sesión
                      </button>
                    </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="cambiopassword.php">¿Se te olvidó tu contraseña?</a>
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
  <script src="codigologin1.js"></script>
  <script src="popper/popper.min.js"></script>

</body>

</html>

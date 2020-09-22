<?php 
  $msg = null;
  if (isset($_REQUEST ['err'])) {
    $msg = $_REQUEST['err'];
  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Universidad de Cartagena - Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="sweetalert/css/sweetalert2.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="icon" href="img/logo5.png">


	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none; 
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
      }
    </style>
    <!-- link css apartes -->
    <link href="belleza1.css" rel="stylesheet">
    <link href="estilomodal.css" rel="stylesheet">

    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="sweetalert/js/sweetalert2.all.min.js"></script>

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
  <!--Inicio nav #1 nav md - lg - xl -->
	<nav class="navbar navbar-expand-xl d-none d-sm-block">
		<div class="container">

      <!-- logo UDC -->
      <a class="navbar-brand" href="#">
        <img src="img/logoprincipal.png" width="250" height="90" id="img1">
      </a>

      <!-- fin logo UDC -->
      <div class="form-inline">

        <!-- Inicio modal #1-->
        <a href="#" class="btn btn-outline-warning btn-lg " role="button" data-toggle="modal" data-target="#staticBackdrop">
          <i class="fa fa-user" aria-hidden="true"></i>
        Estudiante
        </a>
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <!--Contenido del modal-->
              <div class="modal-body">

              <form method="post" action="estudiante.php"  class="needs-validation" novalidate>
                <div class="form-signin">
                  <h1 class="h4 mb-3 font-weight-normal">Bienvenido Estudiante</h1>
                  <div class="form-label-group">
                    <input type="text" id="numerodedocumento" name="numerodedocumento" class="form-control" placeholder="Usuario" minlength="7" autofocus style="width: 100%;" required>
                    <label for="numerodedocumento">Usuario</label>
                    <div class="invalid-tooltip">
                      Campo vacio
                    </div>
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña"  minlength="7" style="width: 100%;" required>
                    <label for="password">Contraseña</label>
                    <div class="invalid-tooltip">
                      Campo vacio
                    </div>
                  </div>
                  <button class="btn btn-lg btn-warning btn-block" type="submit"style="margin-left: 0px; border: none;">Iniciar sesión</button>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="validacionusuario.php" style="color: #3116FA;">¿Se te olvidó tu contraseña?</a>
                  </div>
                </div>
              </form>
              </div>
              <!--fin del Contenido-->

            </div>
          </div>
        </div>
        <!-- fin del modal #1-->

        <!--Inicio modal #2-->
        <a href="#" class="btn btn-outline-warning btn-lg" role="button" data-toggle="modal" data-target="#staticBackdrop1">
          <i class="fa fa-graduation-cap" aria-hidden="true" ></i>
        Docente
        </a>
        <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <!-- Contenido-->
              <div class="modal-body">
                <form method="post" action="docente.php"  class="needs-validation" novalidate>
                  <div class="form-signin">
                    <h1 class="h4 mb-3 font-weight-normal">Bienvenido Docente</h1>
                    <div class="form-label-group">
                      <input type="text" name="numerodedocumento" id="numerodedocumento" class="form-control" placeholder="Usuario" minlength="7" autofocus style="width: 100%;" required>
                      <label for="numerodedocumento">Usuario</label>
                      <div class="invalid-tooltip">
                        Campo vacio
                      </div>
                    </div>  
                    <div class="form-label-group">
                      <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" minlength="7" style="width: 100%;" required>
                      <label for="password">Contraseña</label>
                      <div class="invalid-tooltip">
                        Campo vacio
                      </div>
                    </div>
                    <button class="btn btn-lg btn-warning btn-block" type="submit" style="margin-left: 0px; border: none;">Iniciar sesión</button>
                    <hr>
                     <div class="text-center">
                      <a class="small" href="validaciondocente.php" style="color: #3116FA;">¿Se te olvidó tu contraseña?</a>
                    </div>
                  </div>
                </form>
              </div>
              <!--fin del Contenido-->

            </div>
          </div>
        </div>
        <!-- fin del modal #2-->

        <!--Inicio modal #3-->
        <a href="#" class="btn btn-outline-warning btn-lg" role="button"  data-toggle="modal" data-target="#staticBackdrop2">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        Administrativo
        </a>
        <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <!--Inicio del Contenido-->
              <div class="modal-body">
                <form method="post" action="admin.php"  class="needs-validation" novalidate>
                  <div class="form-signin">
                    <h1 class="h4 mb-3 font-weight-normal">Bienvenido a la administración</h1>
                    <div class="form-label-group">
                      <input type="text" id="numerodedocumento" name="numerodedocumento" class="form-control" placeholder="Usuario" minlength="7" required autofocus style="width: 100%;" required>
                      <label for="numerodedocumento">Usuario</label>
                      <div class="invalid-tooltip">
                        Campo vacio
                      </div>
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" minlength="7" required style="width: 100%;" required>
                      <label for="password">Contraseña</label>
                      <div class="invalid-tooltip">
                        Campo vacio
                      </div>
                    </div>
                    <button class="btn btn-lg btn-warning btn-block" type="submit" style="margin-left: 0px; border: none;">Iniciar sesión</button>
                    <hr>
                    <div class="text-center">
                      <a class="small" href="validacionadmin.php" style="color: #3116FA;">¿Se te olvidó tu contraseña?</a>
                    </div>
                  </div>
                </form>
              </div>

              <!--fin del Contenido-->
            </div>
          </div>
        </div>
        <!--fin del modal #3-->
      </div>
    </div>
	</nav>
  <!--final nav #1 nav md - lg - xl -->

  <!--Inico nav #2 md - lg - xl -->
	<nav class="navbar navbar-expand-xl navbar-dark mb-4 d-none d-sm-block">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
	  		<div class="collapse navbar-collapse" id="navbarCollapse">
	    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="#">Inicio</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Sobre Nosotros</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Admisiones</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Oferta Académica</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Internacional</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Bienestar</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Contáctanos</a>
      			</li>
	      	</ul><br>
			</div>
		</div>
	</nav>
  <!--fin del nav #2 md - lg - xl -->

	<!--Inicio nav sm -->
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top d-sm-none">
    <a class="navbar-brand" href="principal.php"><img src="img/logoprincipal.png" width="210" height="65"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample003" aria-controls="navbarsExample003" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample003">
      <ul class="navbar-nav mr-auto">
        <br>
        <!--botones con logo -->
        <li class="nav-item active">
          <a class="btn btn-outline-warning btn-lg" role="button" href="loginstudent.php">
          <i class="fa fa-user fa-lg" aria-hidden="true"></i>
         </a>
          <a class="btn btn-outline-warning btn-lg " role="button" href="logindocente.php">
            <i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i>
          </a>
          <a class="btn btn-outline-warning btn-lg " role="button" href="loginadministrador.php">
            <i class="fa fa-cogs fa-lg" aria-hidden="true"></i>
          </a>
        </li>
        <!--final de los botones con logo -->
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admisiones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Oferta Académica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Internacional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bienestar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contáctanos</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search">
      </form><br>
    </div>
  </nav>
  <!--Fin del nav sm -->

	<!--- carrusel --->
	<main role="main" class="d-none d-lg-block container d-none d-md-block">
		<div id="myCarousel" class=" carousel slide" data-ride="carousel">
    		<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
    			<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>
    		<div class="carousel-inner">
    			<div class="carousel-item active">
      			<a href="#" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"> 
              <img src="img/5.jpg" alt="" width="100%" height="100%">
              <rect width="100%" height="100%" fill="#777"/>
     				</a>
    			</div>
    			<div class="carousel-item">
    				<a href="#" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
              <img src="img/6.jpg" alt="" width="100%" height="100%">
              <rect width="100%" height="100%" fill="#777"/>
            </a>
    			</div>
    			<div class="carousel-item">
    				<a href="#" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
              <img src="img/4.jpg" alt="" width="100%" height="100%">
    					<rect width="100%" height="100%" fill="#777"/>
      		  </a>
    			</div>
		    </div>
		    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
    		</a>
		</div>
	</main>

  <footer class="blog-footer">
    <p>Pie de pagina de <a href="#"> Prueba </a> by <a href="#"> Yeyeland</a>.</p>
    <p>
      <a href="#">Regresar Arriba.</a>
    </p>
  </footer>
  
  <script src="codigologin1.js"></script>
	<script src="popper/popper.min.js"></script>
  
</body>
</html>
<?php
  session_start();
 
if (isset($_SESSION['nivel3'])) {

  $hostt = "localhost";
  $user = "root";
  $passwordd = ""; 
  $dbname   = "proyectoudc"; 
  
  try { $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$passwordd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

        $sen = $conn->prepare("SELECT * FROM   administracion  WHERE numerodedocumento= ? " ); 
            
        $sen->execute(array($_SESSION['numerodedocumento'])); 

        $row =$sen->fetch(PDO::FETCH_OBJ);            

      }catch (PDOException $th){
        echo $th->getmessage();
      }
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo5.png">

  <title>Datos Personales</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="awesome/css/font-awesome.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fa fa-university fa-lg"></i>
        </div>
        <div class="sidebar-brand-text mx-3">udc</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fa fa-info-circle"></i>
          <span>INICIO</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menú
      </div>

        <!-- Inicio del menu del administrador -->

        <li class="nav-item">
          <a class="nav-link" href="listaestudiante.php">
            <i class="fa fa-users"></i>
            <span>Lista de estudiantes</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listadocente.php">
            <i class="fa fa-graduation-cap"></i>
            <span>Lista de Docentes</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datosadmin.php">
            <i class="fa fa-user"></i>
            <span>Datos Personales</span></a>
        </li>

      <!-- Fin del menu del administrador -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['nombre']?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <form action="actuadmin.php" method="POST">
          <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <button type="submit" class="btn btn-warning btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                  </span>
                  <span class="text">Editar datos</span> 
                </button>
              </div>
              <div class="card-body">
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="tipodedocumento_id">Tipo de Documento</label>
                      <input type="text" class="form-control" id="tipodedocumento_id" name="tipodedocumento_id" value="<?=$row->tipodedocumento_id?>" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="numerodedocumento">Numero de Documento</label>
                      <input type="number" class="form-control" id="numerodedocumento" name="numerodedocumento" value="<?=$row->numerodedocumento?>" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="fechadenacimiento">Fecha de Nacimiento</label>
                      <input type="date" class="form-control" id="fechadenacimiento" name="fechadenacimiento" value="<?=$row->fechadenacimiento?>" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="genero_id">Genero</label>
                      <input type="text" class="form-control" id="genero_id" name="genero_id" value="<?=$row->genero_id?>" readonly>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="primernombre">Primer Nombre</label>
                      <input type="text" class="form-control" id="primernombre" name="primernombre" value="<?=$row->primernombre?>" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="segundonombre">Segundo Nombre</label>
                      <input type="text" class="form-control" id="segundonombre" name="segundonombre" value="<?=$row->segundonombre?>" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="primerapellido">Primer Apellido</label>
                      <input type="text" class="form-control" id="primerapellido" name="primerapellido" value="<?=$row->primerapellido?>" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="segundoapellido">Segundo Apellido</label>
                      <input type="text" class="form-control" id="segundoapellido" name="segundoapellido" value="<?=$row->segundoapellido?>" readonly>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="email">Correo Electronico</label>
                      <input type="email" class="form-control" id="email" name="email" value="<?=$row->email?>" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="celular1">Celular1</label>
                      <input type="number" class="form-control" id="celular1" name="celular1" value="<?=$row->celular1?>" readonly>
                    </div>
                  </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>

  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
<?php       
}else {
    header('location: index.php');
  
}?>
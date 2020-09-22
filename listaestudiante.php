<?php
  session_start();
 
 if (isset($_SESSION['numerodedocumento'])) {

  $hostt = "localhost";
  $user = "root";
  $password = ""; 
  $dbname   = "proyectoudc"; 
  
  try { $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$password);
    
    $sen = $conn->prepare("SELECT * FROM estudiantes LIMIT 10"); 

    $sen->execute() ; 
     $rows =$sen->fetchAll(PDO::FETCH_OBJ); 
       
     }catch(PDOException $th) {
      echo $th->getMessage(); }
?>
<?php 
  $msg = null;
  if (isset($_REQUEST ['err'])) {
    $msg = $_REQUEST['err'];
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo5.png">

  <title>Inicio sesión: Universidad de Cartagena</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="sweetalert/css/sweetalert2.min.css">

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="sweetalert/js/sweetalert2.all.min.js"></script>

</head>

<body id="page-top">
   <?php 
    if($msg != null){
      echo "
        <script>
          Swal.fire({
           position: 'top-end',
           icon: 'success',
           title: '$msg',
           showConfirmButton: false,
           timer: 1500
          });

        </script>";
      }
     ?>

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

      <!-- Inicio del menu del docente y administrador -->

        <li class="nav-item">
          <a class="nav-link" href="listaestudiante.php">
            <i class="fa fa-users"></i>
            <span>Lista de estudiantes</span></a>
        </li>
        <?php if ($_SESSION['nivel'] == 2) { ?>
          <li class="nav-item">
            <a class="nav-link" href="actudocente.php">
              <i class="fa fa-user"></i>
              <span>Datos Personles</span></a>
          </li>
        <?php } ?>

         <?php if ($_SESSION['nivel'] == 3) { ?>
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
        <?php } ?>

      <!-- Fin del menu del docente y administrador -->

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


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <?php if ($_SESSION['nivel'] == 2) { ?>
                <h1 class="h3 mb-2 text-gray-800">Estudiantes</h1>
              <?php } ?>
              <?php if ($_SESSION['nivel'] == 3) { ?>
                <a href="crear.php" class="btn btn-success btn-icon-split">
                  <span class="icon text-white-50">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                  </span>
                  <span class="text">Crear Estudiante</span> 
                </a>
              <?php } ?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N° de Documento</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Correo Electronico</th>
                      <th>Programa</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>N° de Documento</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Correo Electronico</th>
                      <th>Programa</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      foreach ($rows as $row ){
                    ?>
                      <tr>
                        <td><?=$row->numerodedocumento?></td>
                        <td><?=$row->primernombre?> <?=$row->segundonombre?></td>
                        <td><?=$row->primerapellido?> <?=$row->segundoapellido?></td>
                        <td><?=$row->email?></td>
                        <td><?=$row->programa?></td>
                        <td>
                          <a href="ver.php?numerodedocumento=<?=$row->numerodedocumento?>" class="btn btn-dark btn-circle">
                            <i class="fa fa-eye"></i>
                          </a>
                          <?php if ($_SESSION['nivel'] == 3) { ?>
                              <a href="editar.php?numerodedocumento=<?=$row->numerodedocumento?>" class="btn btn-warning btn-circle">
                                <i class="fa fa-pencil"></i>
                              </a>
                               <button class="btn btn-danger btn-circle" data-toggle="modal" data-target="#exampleModal" >
                                <i class="fa fa-trash"></i>
                              </button>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php
                      } 
                    ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
         <i class="fa fa-exclamation-triangle fa-5x text-danger"></i><br><br>
         <h2>¿Estás seguro?</h2>
         <h4>¡No podrás revertir esto!</h4>
        <div class="modal-footer">
          <a href="borrar.php?numerodedocumento=<?=$row->numerodedocumento?>" class="btn btn-danger">¡Sí, bórralo!</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="alertas.js"></script>

</body>

</html>
<?php       
}else {
    header('location: principal.php');
  
}?>
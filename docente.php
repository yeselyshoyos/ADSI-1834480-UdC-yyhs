<?php
  session_start();

    $hostt = "localhost";
    $user = "root";
    $passwordd = ""; 
    $dbname   = "proyectoudc"; 
    
   try { $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$passwordd);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);   


      if (!$conn) {
          header("location: 404.html");
        } else {
          $numerodedocumento = $_POST['numerodedocumento'];
          $password          = $_POST['password'];
          $password = sha1($password);


          $sen = $conn->prepare("SELECT * FROM docentes WHERE numerodedocumento = ? AND password = ? ");
          }  
        $sen->execute(array($numerodedocumento,$password)); 

          if ($sen->rowCount() > 0) {
             $row =$sen->fetch(PDO::FETCH_OBJ);
              $_SESSION['nombre']         = $row->primernombre;
              $_SESSION['numerodedocumento'] = $row->numerodedocumento;
              $_SESSION['nivel']          = $row->nivel;
              $_SESSION['nivel2']          = $row->nivel == 2;

            header("location: index.php");
          } else {  
            $msg = "Usuario y/o contraseña incorrecta";  
            header("location: principal.php?err=$msg");
          }

      }catch (PDOException $th) {
          echo $th->getMessage();
      }
?>
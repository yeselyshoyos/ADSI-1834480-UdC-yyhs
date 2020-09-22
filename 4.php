<?php 
session_start();
 
  $numerodedocumento = $_REQUEST['numerodedocumento'];
  
    $servername = "localhost";
    $username   = "root";
    $passwordd   = "";
    $dbname     = "proyectoudc";

    try { $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $passwordd);

           $sen = $conn->prepare("SELECT * FROM docentes WHERE numerodedocumento = ? ");

            $sen->execute(array($numerodedocumento)); 

                if ($sen->rowCount() >= 1) {
                    $row =$sen->fetch(PDO::FETCH_OBJ);
                    $_SESSION['numerodedocumento'] = $row->numerodedocumento;

                    header("location: cambiopassdocente.php");
                } else {  
                    $msg = "Usuario incorrecto";  
                    header("location: validaciondocente.php?err=$msg");
                }

        }catch (PDOException $th) {
            echo $th->getMessage();
        }

 ?>

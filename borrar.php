<?php
 //session_start();
 
 $numerodedocumento = $_REQUEST['numerodedocumento'];

    $hostt = "localhost";
    $user = "root";
    $passwordd = ""; 
    $dbname   = "proyectoudc";

    try {
        $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$passwordd);
        
        $sen = $conn->prepare("DELETE FROM estudiantes WHERE numerodedocumento = $numerodedocumento ");
             
        $sen->execute(array($numerodedocumento)); 
            $msg = "¡Eliminado!";  
            header("location: listaestudiante.php?err=$msg");

        

        
    } catch (PDOException $th) {
        echo $th->getMessage(); 
    }

?>
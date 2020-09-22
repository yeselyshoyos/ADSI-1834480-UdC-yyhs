<?php 
	session_start();

	$tipodedocumento_id = $_REQUEST['tipodedocumento_id'];
	$numerodedocumento  = $_REQUEST['numerodedocumento'];
	$primernombre       = $_REQUEST['primernombre'];
	$segundonombre      = $_REQUEST['segundonombre'];
	$primerapellido     =$_REQUEST['primerapellido'];
	$segundoapellido    = $_REQUEST['segundoapellido'];
	$email              =$_REQUEST['email'];
	$genero_id          = $_REQUEST['genero_id'];
	$password          = $_REQUEST['password'];

	$hostt = "localhost";
    $user = "root";
    $passwordd = ""; 
    $dbname   = "proyectoudc";

    try {
        $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$passwordd);

        $consulta=("SELECT COUNT(*) FROM estudiantes WHERE numerodedocumento = :numerodedocumento");
		$resultado= $conn->prepare($consulta);
		$resultado->execute(array(":numerodedocumento" => $numerodedocumento));
		if($resultado->fetchColumn() > 0){
			
			$msg = 'Datos repetidos, intentelo de nuevo';
		    header("location: crear.php?err=$msg");
		}else{
        
        $sen = $conn->prepare("INSERT INTO estudiantes (
        	tipodedocumento_id,
        	numerodedocumento,
        	primernombre,
        	segundonombre,
        	primerapellido,
        	segundoapellido,
        	email,
        	genero_id,
        	password
        	) 
        	VALUES (?,?,?,?,?,?,?,?,sha1(?))");   
        $sen->execute(array($tipodedocumento_id,$numerodedocumento,$primernombre,$segundonombre,$primerapellido,$segundoapellido,$email,$genero_id,$password)); 

            $msg2 = '¡Estudiante creado Exitosamente!';
            header("location: crear.php?coco=$msg2");
        }
    } catch (PDOException $th) {
        echo $th->getMessage(); 
    }
 ?>
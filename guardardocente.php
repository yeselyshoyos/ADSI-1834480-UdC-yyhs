<?php 

session_start();
	$tipodedocumento_id      = $_REQUEST['tipodedocumento_id'];
	$fechadenacimiento       = $_REQUEST['fechadenacimiento'];
	$genero_id               = $_REQUEST['genero_id'];
	$primernombre            = $_REQUEST['primernombre'];
	$segundonombre           = $_REQUEST['segundonombre'];
	$primerapellido          = $_REQUEST['primerapellido'];
	$segundoapellido         = $_REQUEST['segundoapellido'];
	$direccion               = $_REQUEST['direccion'];
	$email                   = $_REQUEST['email'];
	$celular1                = $_REQUEST['celular1'];
	$celular2                = $_REQUEST['celular2'];

    
    $servername = "localhost";
        $username   = "root";
        $passwordd   = "";
        $dbname     = "proyectoudc";
        try { $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $passwordd);
            $sen = $conn->prepare("UPDATE  docentes SET 
					tipodedocumento_id      = ?,
					fechadenacimiento       = ?,
					genero_id               = ?,
					primernombre            = ?,
					segundonombre           = ?,
					primerapellido          = ?,
					segundoapellido         = ?,
					direccion               = ?,
					email                   = ?,
					celular1                = ?,
					celular2                = ?
					WHERE numerodedocumento =?");

                $sen->execute(array($tipodedocumento_id, $fechadenacimiento, $genero_id, $primernombre, $segundonombre, $primerapellido, $segundoapellido,$direccion, $email, $celular1, $celular2, $_SESSION['numerodedocumento'] ));
        if ($sen) {
                header("location: index.php");
            }else{
            	header("location: 404.html");
            }

        }catch (PDOException $th) {
            echo $th->getMessage();
        }
 ?>
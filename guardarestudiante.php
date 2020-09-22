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
	$zona_id                 = $_REQUEST['zona_id'];
	$tipovivienda_id         = $_REQUEST['tipovivienda_id'];
	$email                   = $_REQUEST['email'];
	$fechadegraduacion       = $_REQUEST['fechadegraduacion'];
	$institucion_id          = $_REQUEST['institucion_id'];
	$ingresohogar_id         = $_REQUEST['ingresohogar_id'];
	$nivelacademicom_id      = $_REQUEST['nivelacademicom_id'];
	$nivelacademicop_id      = $_REQUEST['nivelacademicop_id'];
	$asignaturas_id          = $_REQUEST['asignaturas_id'];
	$calificacionprograma_id = $_REQUEST['calificacionprograma_id'];
	$celular1                = $_REQUEST['celular1'];
	$celular2                = $_REQUEST['celular2'];
	$estadocivil_id          = $_REQUEST['estadocivil_id'];

    
    $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "proyectoudc";
        try { $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            $sen = $conn->prepare("UPDATE  estudiantes SET 
					tipodedocumento_id      = ?,
					fechadenacimiento       = ?,
					genero_id               = ?,
					primernombre            = ?,
					segundonombre           = ?,
					primerapellido          = ?,
					segundoapellido         = ?,
					direccion               = ?,
					zona_id                 = ?,
					tipovivienda_id         = ?,
					email                   = ?,
					fechadegraduacion       = ?,
					institucion_id          = ?,
					ingresohogar_id         = ?,
					nivelacademicom_id      = ?,
					nivelacademicop_id      = ?,
					asignaturas_id          = ?,
					calificacionprograma_id = ?,
					celular1                = ?,
					celular2                = ?,
					estadocivil_id          = ?
					WHERE numerodedocumento =?");

                $sen->execute(array($tipodedocumento_id, $fechadenacimiento, $genero_id, $primernombre, $segundonombre, $primerapellido, $segundoapellido,$direccion, $zona_id, $tipovivienda_id, $email,$fechadegraduacion, $institucion_id,$ingresohogar_id, $nivelacademicom_id, $nivelacademicop_id , $asignaturas_id, $calificacionprograma_id, $celular1, $celular2, $estadocivil_id,$_SESSION['numerodedocumento'] ));
        if ($sen) {
                header("location: index.php");
            }else{
            	header("location: 404.html");
            }

        }catch (PDOException $th) {
            echo $th->getMessage();
        }
 ?>
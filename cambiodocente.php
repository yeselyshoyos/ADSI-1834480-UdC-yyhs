<?php 
	session_start();
	
	$password = $_REQUEST['password'];

		$servername = "localhost";
		$username   = "root";
		$passwordd   = "";
		$dbname     = "proyectoudc";
		try { $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $passwordd);
		       
             $sen = $conn->prepare("UPDATE  docentes SET 
                    password          = sha1(?)
                    WHERE numerodedocumento =?");

                $sen->execute(array($password,$_SESSION['numerodedocumento'] ));
        if ($sen) {
                header("location: regresar.php");
            }else{ 
                header("location: 404.html");
            }

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
 ?>
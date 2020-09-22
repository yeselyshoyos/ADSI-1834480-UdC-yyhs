<?php
  session_start();

 if (isset($_SESSION['numerodedocumento'])) {
        
?> 

<?php

  $hostt = "localhost";
  $user = "root";
  $password = ""; 
  $dbname   = "proyectoudc"; 
  
  try { $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$password);

    $sen = "SELECT * FROM tipodedocumento"; 
    $result = $conn->prepare($sen);
	$result->execute();

	$sen = "SELECT * FROM zona"; 
    $result1 = $conn->prepare($sen);
	$result1->execute();

	$sen = "SELECT * FROM tipovivienda"; 
    $result2 = $conn->prepare($sen);
	$result2->execute();

	$sen = "SELECT * FROM estadocivil"; 
    $result3 = $conn->prepare($sen);
	$result3->execute();

	$sen = "SELECT * FROM institucion"; 
    $result4 = $conn->prepare($sen);
	$result4->execute();

	$sen = "SELECT * FROM ingresohogar"; 
    $result5 = $conn->prepare($sen);
	$result5->execute();

	$sen = "SELECT * FROM nivelacademicom"; 
    $result6 = $conn->prepare($sen);
	$result6->execute();

	$sen = "SELECT * FROM nivelacademicop"; 
    $result7 = $conn->prepare($sen);
	$result7->execute();

	$sen = "SELECT * FROM asignaturas"; 
    $result8 = $conn->prepare($sen);
	$result8->execute();

	$sen = "SELECT * FROM calificacionprograma"; 
    $result9 = $conn->prepare($sen);
	$result9->execute();

	$sen = "SELECT * FROM genero"; 
    $result10 = $conn->prepare($sen);
	$result10->execute();
       
     }catch(PDOException $th) {
      echo $th->getMessage(); }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Encuenta: Estudiante</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="awesome/css/font-awesome.min.css">
  	<link href="css/sb-admin-2.min.css" rel="stylesheet">

	<link rel="icon" href="img/logo5.png">
	<link rel="stylesheet" href="cssp/encuenta.css">

	<script src="jquery/jquery-3.5.1.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="popper/popper.min.js"></script>
	<script src="codigologin1.js"></script>
</head>
<body class="este">
	<div class="container">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Estudiante
			  <strong><em><?=$_SESSION['nombre']?></em></strong> si ya realizo la siguiente encuesta haga caso omiso a este.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>		
  			<h1 class="display-6"><img src="img/escudo.png" width="110" height="80"> Encuesta al estudiante</h1><br>
			<form class="needs-validation" novalidate method="post" action="encuestavalidate.php">
	  			<div class="form-row">
				    <div class="col-md-6 mb-3">
				      	<label for="tipodedocumento_id">Tipo de Documento</label>
				      	<select name="tipodedocumento_id" class="form-control" id="tipodedocumento_id"required>
	                  		<option></option>
	         				<?php 
                    			foreach ($result as $row ){
                    				$id = $row['id'];
                    				$nombre = $row['nombre'];
                      			echo "<option value ='$nombre'>$nombre</option>";
                    			}
              				?>
	            		</select>
				      <div class="invalid-tooltip">
				        Campo vacio.
				      </div>
				    </div>
		    		<div class="col-md-6 mb-3">
			      		<label for="fechadenacimiento">Fecha de Nacimiento</label>
			      		<input type="date" class="form-control" id="fechadenacimiento" name="fechadenacimiento" required>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
			  	</div>
			  	<div class="form-row">
			  		<div class="col-md-6 mb-3">
				      	<label for="genero_id">Genero</label>
				      	<select name="genero_id" class="form-control" id="genero_id"required>
	                  		<option></option>
	         				<?php 
                    			foreach ($result10 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
				      <div class="invalid-tooltip">
				        Campo vacio.
				      </div>
				    </div>
			  		<div class="col-md-6 mb-3">
			      		<label for="email">Correo Electronico</label>
			      		<input type="email" class="form-control" id="email" name="email" required>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
			  	</div>
			  	<div class="form-row">
				    <div class="col-md-6 mb-3">
				      	<label for="zona_id">Zona donde Vive</label>
				      	<select name="zona_id" class="form-control" id="zona_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result1 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
				      	<div class="invalid-tooltip">
				        	Campo vacio.
				      	</div>
				    </div>
				    <div class="col-md-6 mb-3">
				      	<label for="tipovivienda_id">Tipo de vivienda</label>
				      	<select name="tipovivienda_id" class="form-control" id="tipovivienda_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result2 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
				      	<div class="invalid-tooltip">
				        	Campo vacio.
				      	</div>
			    	</div>
		  		</div>
		  		<div class="form-row">
		    		<div class="col-md mb-3">
				      	<label for="direccion">Dirección</label>
				      	<input type="text" class="form-control" id="direccion" name="direccion" required>
				      	<div class="invalid-tooltip">
				        	Campo vacio.
				      	</div>
				    </div>
		  		</div>
		  		<div class="form-row">
		  			<div class="col-md-6 mb-3">
			      		<label for="estadocivil_id">Estado Civil</label>
			      		<select name="estadocivil_id" class="form-control" id="estadocivil_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result3 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		    		<div class="col-md-6 mb-3">
			      		<label for="fechadegraduacion">Fecha de Graduacion de Bachiller</label>
			      		<input type="date" class="form-control" id="fechadegraduacion" name="fechadegraduacion" required>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		  		</div>
		  		<div class="form-row">
		  			<div class="col-md-6 mb-3">
			      		<label for="institucion_id">Tipo de I. E. de Procedencia</label>
			      		<select name="institucion_id" class="form-control" id="institucion_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result4 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		    		<div class="col-md-6 mb-3">
			      		<label for="ingresohogar_id">Nivel de Ingreso en el Hogar</label>
			      		<select name="ingresohogar_id" class="form-control" id="ingresohogar_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result5 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		  		</div>
		  		<div class="form-row">
		  			<div class="col-md-6 mb-3">
			      		<label for="nivelacademicom_id">Nivel Academico de la Madre</label>
			      		<select name="nivelacademicom_id" class="form-control" id="nivelacademicom_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result6 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		    		<div class="col-md-6 mb-3">
			      		<label for="nivelacademicop_id">Nivel Academico del Padre</label>
			      		<select name="nivelacademicop_id" class="form-control" id="nivelacademicop_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result7 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		  		</div>
		  		<div class="form-row">
		  			<div class="col-md-6 mb-3">
			      		<label for="asignaturas_id">Asignaturas Matriculadas</label>
			      		<select name="asignaturas_id" class="form-control" id="asignaturas_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result8 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		    		<div class="col-md-6 mb-3">
			      		<label for="calificacionprograma_id">Califique su Programa</label>
			      		<select name="calificacionprograma_id" class="form-control" id="calificacionprograma_id" required>
	                  		<option></option>
	                  		<?php 
                    			foreach ($result9 as $row ){
                    				$id = $row['id'];
                      			echo "<option value ='$id'>$id</option>";
                    			}
              				?>
	            		</select>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		  		</div>
		  		<div class="form-row">
		  			<div class="col-md mb-3">
			      		<label for="celular1">Numero de Celular</label>
			      		<input type="tel" class="form-control" id="celular1" name="celular1" required>
			      		<div class="invalid-tooltip">
			        		Campo vacio.
			      		</div>
		    		</div>
		    		<div class="col-md mb-3">
			      		<label for="celular2">Numero de Celular 2 (opcional)</label>
			      		<input type="tel" class="form-control" id="celular2" name="celular2">
		    		</div>
		  		</div><br>
			  	<div class="text-right">
			  		<button class="btn btn-warning" type="submit">Enviar</button>
				</div>	
			</form>
		</div>
	</div>

</body>
</html>

<?php      
   } else {
    header('location: index.php');
  
}?>
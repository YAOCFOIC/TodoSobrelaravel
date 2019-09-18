<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,700'>
    <link rel="stylesheet" href="css/style.css">

	<title>Mi horario</title>
</head>
<body>
<?php 
	include 'nav.php';
?>
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">HORARIO</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>HORAS</th>
					<th>USUARIO</th>	
					<th>SOPORTE</th>				
					<th>ACCION</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $user=$_SESSION['nombre'];
				     $result=mysqli_query($conexion,"SELECT cita FROM datosusuario where idusuario='$user'");
				     $cita=mysqli_fetch_array($result);
				     $codcita=$cita['cita'];
				     if ($codcita==0){
						 $result=mysqli_query($conexion,'SELECT * FROM horarios');
						 while ($horarios=mysqli_fetch_array($result)){
							 $id=$horarios['id'];						 
							 if ($horarios['paciente']==null){
						 echo "<tr><td id='id:$id' class='cam_editable'>".$horarios['id']."</td>";
						 echo "<td id='horas:$id' class='cam_editable'>".$horarios['horas']."</td>";				     
						 echo "<td id='paciente:$id' class='cam_editable'>".$horarios['paciente']."</td>";
						 echo "<td id='doctor:$id' class='cam_editable'>".$horarios['doctor']."</td>";	
						 echo"<td id='$id' name='$user' button='true'><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span> Apartar</button></td>";
						 echo"</tr>";
							 }
						 }
					 }else{
						 $result=mysqli_query($conexion,"SELECT * FROM horarios where id='$codcita'");
						 while ($horarios=mysqli_fetch_array($result)){
							 $id=$horarios['id'];
							 echo "<tr><td id='id:$id' class='cam_editable'>".$horarios['id']."</td>";
							 echo "<td id='horas:$id' class='cam_editable'>".$horarios['horas']."</td>";
							 echo "<td id='paciente:$id' class='cam_editable'>".$horarios['paciente']."</td>";
							 echo "<td id='doctor:$id' class='cam_editable'>".$horarios['doctor']."</td>";
							 echo"<td id='$id' name='$user' button='false'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Cancelar Cita</button></td>";
							 echo"</tr>";
						 }
					 }
				?>
			</tbody>	
					
		</table>
		<div id="calendar"></div>
		  <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
		<script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js'></script>

    <script src="js/index.js"></script>
	</div>
	</div>
	
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	</div>
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">cambiar contraseña</h4>
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>vieja contraseña</label>
                  <input  name="password0" id="p" class="form-control" type="password"required>
                </div>
                <div class="form-group">
                  <label>nueva contraseña</label>
                  <input  name="password1" id="p3" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita nueva password</label>
                  <input  name="password2" id="p4" class="form-control" type="password" required>
                </div> 
                 <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cambiar
                </button> 
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
<!--//////////////////////////////////////////////////-->	
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/maincita.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">        
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>
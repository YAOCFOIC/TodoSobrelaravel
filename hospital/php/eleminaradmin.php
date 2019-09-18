<?php
if(!empty($_POST)){
	include 'conexion.php';
	foreach($_POST as $field_name=>$val){
		$field_id=strip_tags(trim($field_name));
		if(!empty($field_id)){
			mysqli_query($conexion,"DELETE FROM usuarios where nombre='$field_id'") or mysqli_error();
			echo"true";
		}else{
			echo"false";
		}
	}
}
?>
<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM contacto WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='http://localhost:8080/agenda/';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='http://localhost:8080/agenda/';</script>";

			}
}

?>
<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["address"]) &&isset($_POST["phone"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["address"]!=""){
			include "conexion.php";
			
			$sql = "insert into contacto(name,lastname,email,address,phone,created_at) value (\"$_POST[name]\",\"$_POST[lastname]\",\"$_POST[email]\",\"$_POST[address]\",\"$_POST[phone]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='http://localhost:8080/agenda/';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='http://localhost:8080/agenda/';</script>";

			}
		}
	}
}



?>
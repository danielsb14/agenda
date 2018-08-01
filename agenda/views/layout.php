
<?php include "crud/index.php"; ?>
<?php include "json/mostrarJSON.html"; ?>
<html>
<head>
	<title>Alta de contactos mvc </title>
</head>
<body>
<h3 align="	center">Alta de contactos mvc </h3>
<br>	
	<table border='1' align="center">
		<tr>			
			<td><a href="?controller=contacto&action=register">Ingresar Usuarios</a></td>
			<td><a href="?controller=contacto&action=index">Ver Usuarios</a></td>
		</tr>
	</table>






	<?php require_once('routes.php'); ?>
</body>
</html>
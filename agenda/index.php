

<?php 
	 require_once('connection.php');
	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];		
	} else {
		$controller='contacto';
		$action='index';
	}	
	//carga la vista layout.php
	require_once('views/layout.php');
?>

<h3>Instalacion:</h3>
<ul>Configurar los puertos de 80 a 8080 y 443 a 4430</ul>
<ul>Crear base de datos "agenda" e importar el archivo bd/agenda.sql</ul>
<ul>copiar los archivos del proyecto Agenda a la ruta raiz del servidor, ejemplo www, htdocs</ul>




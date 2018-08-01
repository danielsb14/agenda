<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "agenda";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("error en la conexion de la base de datos");


/*$host_db = "localhost:8080";
$user_db = "root";
$pass_db = "";

$conexion = mysql_connect($host_db, $user_db, $pass_db);

if (!$conexion)

{
die('Error: ' . mysql_error());
}*/


//mysql_select_db($bd, $conexion); 

$query = "SELECT * FROM contacto"; 

mysqli_set_charset($conexion, "utf8");
if(!$result = mysqli_query($conexion, $query)) die();

$convertToJson = array();

while($row = mysqli_fetch_array($result))
{
$rowArray['id'] = $row['id'];

$rowArray['name'] = $row['name'];

$rowArray['lastname'] = $row['lastname'];

$rowArray['address'] = $row['address'];
$rowArray['phone'] = $row['phone'];
$rowArray['email'] = $row['email']; 

array_push($convertToJson, $rowArray);

}
json_encode($convertToJson);

$listacontactos = "listacontatos.json";

$data = json_encode($convertToJson); 

if ($fp = fopen($listacontactos, "w"))
{
fwrite($fp, $data);
}
fclose($fp);

mysqli_close($conexion) 

?>



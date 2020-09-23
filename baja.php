<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<body bgcolor="#FEE304">
<?php
$user="root";
$pass="";
$server= "localhost";
$db="phpdesdecero";

	$dni= $_REQUEST['baja'];


	$con=mysqli_connect($server,$user,$pass,$db) or die ("error al conectar");



	$consulta= "DELETE from usuarios where dni = $dni";
	
	mysqli_query($con,$consulta);

	echo"Los datos se borraron con exito";

?>
</body>
</html>


<?php
$user="root";
$pass="";
$server= "localhost";
$db="phpdesdecero";


$nombre=$_POST['nombre'];
$msj=$_POST['msj'];




	$con=mysqli_connect($server,$user,$pass,$db) or die ("error al conectar");

	$consulta="INSERT INTO comentarios values('$nombre','$msj')";
	
	mysqli_query($con,$consulta);

	echo"ENVIADO";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
.boton-personalizado-4 {
text-decoration:none;
font-weight: 600;
font-size: 10px;
color:white;
padding-top:12px;
padding-bottom:10px;
padding-left:20px;
padding-right:20px;
background-color:#333333;
border-color: #d8d8d8;
border-width: 3px;
border-style: solid;
border-radius:20px;
}
	</style>
</head>
<body>
<body bgcolor="#EED70D">
<br>
<a href="comentar.php" target="comenta" class="boton-personalizado-4" style="float:right;">Volver</a>
</body>
</html>
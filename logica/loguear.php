<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.boton-personalizado-4 {
text-decoration:none;
font-weight: 600;
font-size: 10px;
color:#333333;
padding-top:12px;
padding-bottom:10px;
padding-left:20px;
padding-right:20px;
background-color:#FEE304;
border-color: #d8d8d8;
border-width: 3px;
border-style: solid;
border-radius:20px;
}
	</style>
</head>
<body bgcolor="black">

<?php
session_start();
require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) as contar FROM usuarios where usuario = '$user' and clave = '$clave' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['username'] = $user;
  header("location: ../paginaprincipal.php");
}else {
    echo "<font color=\"white\"><h1>DATOS INCORRECTOS<a href='../menu.php' class='boton-personalizado-4' style='float:right;'>Volver</a></h1></font>";
}


?>
</body>
</html>


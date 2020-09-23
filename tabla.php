<?php
 $host = "localhost";
 $user = "root";
 $clave = "";
 $bd = "phpdesdecero";
 $conectar = mysqli_connect($host,$user,$clave,$bd);
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
<body>
<body bgcolor="#FEE304">
	<CENTER>
<table border="1" width="20" height="12">
	<tr>
		<td>APELLIDO</td>
		<td>NOMBRE</td>
		<td>DNI</td>
		<td>EMAIL</td>
		<td>USUARIO</td>
		<td>CLAVE</td>
	</tr>
<?php
$query = "SELECT * FROM usuarios";
$bdconect = mysqli_query($conectar,$query);

while($mostrar = mysqli_fetch_array($bdconect)){

?>
		<tr>
		<td><?php echo $mostrar['apellido']?></td>
		<td><?php echo $mostrar['nombre'] ?></td>
		<td><?php echo $mostrar['dni'] ?></td>
		<td><?php echo $mostrar['email'] ?></td>
		<td><?php echo $mostrar['usuario'] ?></td>
		<td><?php echo $mostrar['clave'] ?></td>
	</tr>
<?php
}
?>
</table>
<form action="baja.php" method="POST">
Usuario que quiere eliminar:

<input type="text" name="baja">
<input type="submit" class="boton-personalizado-4" value="ELIMINAR">
</form>
</CENTER>
<br>
</body>
</html>

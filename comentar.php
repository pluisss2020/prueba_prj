
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
.redondeado {
   border-radius:20px;
   font-size: 15px;
 }
	</style>
</head>
<body>
<body bgcolor="#EED70D">
<center>
<form action="alta.php" method="POST">
<h2>Barra de comentarios</h2>
<input type="text" name="nombre" class="redondeado"  placeholder="USUARIO"><br><br>
<textarea name="msj" cols="20" rows="10" placeholder="Comentario/Mensaje:"></textarea>
<input type="submit" class="boton-personalizado-4" tarjet="comenta" value="ENVIAR">
</form>
<br>
<br>
<br>
<br>
<table border="1" width="5" height="8">
	<tr>
		<td>USUARIO</td>
		<td>COMENTARIO</td>
		
	</tr>
<?php
$query = "SELECT * FROM comentarios";
$bdconect = mysqli_query($conectar,$query);

while($mostrar = mysqli_fetch_array($bdconect)){

?>
		<tr>
		<td><?php echo $mostrar['usuario'] ?></td>
		<td><?php echo $mostrar['mensaje'] ?></td>
	</tr>
<?php
}
?>
</center>
</table>
</body>
</html>
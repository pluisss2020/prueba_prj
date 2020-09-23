<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#FEE304">
<?php
$user="root";
$pass="";
$server= "localhost";
$db="phpdesdecero";


$apellido=$_REQUEST['apellido'];
$nombre=$_REQUEST['nombre'];
$dni=$_REQUEST['dni'];
$email=$_REQUEST['email'];
$usuario=$_REQUEST['usuario'];
$clave=$_REQUEST['clave'];

    $con=mysqli_connect($server,$user,$pass,$db) or die ("error al conectar");

    $sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
    $sql2 = mysqli_query($con,$sql);


    $num= mysqli_num_rows($sql2);
    if($num>0)
    {
    	echo"<center>YA EXITE ESE USUARIO</center>";
	}
	else
	{
	

	    $consulta="INSERT INTO usuarios values('$apellido','$nombre','$dni','$email','$usuario','$clave')";
	    
	    mysqli_query($con,$consulta);


	    echo"<center>SE REGISTRO CORRECTAMENTE. INICIE SESION</center>";

	}
    
?>
</body>
</html>





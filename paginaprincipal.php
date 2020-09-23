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

.redondeado {
   border-radius:20px;
   font-size: 20px;
 }

</style>

</head>
<body>
 <body bgcolor="black">
 	<div><img style="float:left;" src="img/cursoslogo.jpg" width="90" height="50" />
         <a href="cursos.html" target="central" class="boton-personalizado-4" style="float:right;">CURSOS DISPONIBLES</a>
<p style="color:#FF0000";>      
 	<?php
session_start();
$sesion = $_SESSION['username'];

if(!isset($sesion)){
    header("location: logica/login.php");

}else{

    echo "<center><font color=\"white\"><h1> SESION DE:  $sesion <a href='logica/salir.php' class='boton-personalizado-4' style='float:right;'>Salir</a></font></h1></center>";
}
?>
	
</p>
</div>

</body>
</html>




<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  <?php

   if (empty($_SESSION['username'])) 
   {
      ?>
        <div><img style="float:left;" src="img/cursoslogo.jpg" width="100" height="50" /><form action="login.php" method="POST">
               <button style="float:right;" type="submit" class="boton-personalizado-4">INICIAR SESION</button></form>
      <a href="registrar.html" target="central" class="boton-personalizado-4" style="float:right;">REGISTRARSE</a>
      <a href="loginadmin.php" class="boton-personalizado-4" style="float:right;">ADMIN</a>
            </div>
          <body bgcolor="black">
      <?php
   }
   else{
    header("location: paginaprincipal.php");
   }
  ?>


</body>
</html>
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
    <body bgcolor="black">
      <div><img style="float:left;" src="img/cursoslogo.jpg" width="100" height="50" />
       <center>
       <form action="logica/loguear.php" method="POST">
        <input type="text" name="usuario" class="redondeado" placeholder="   Digite su usuario">
         <input type="password" name="clave" class="redondeado" placeholder="   Digite clave">
         <button type="submit" class="boton-personalizado-4"> ENTRAR</button>
        </form></div>
        </center>
</body>
</html>
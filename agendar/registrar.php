<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>register</title>
</head>
<body>

<?php 

$conexion = mysqli_connect("localhost", "17098623","k7+P03LsFp{3|^SW", "id17098623_odontologia") or die ("problemas con la conexion");
mysqli_query($conexion, "INSERT INTO citas (nombre,telefono,correo,horario) values('$_REQUEST[nombre]','$_REQUEST[telefono]','$_REQUEST[email]','$_REQUEST[horario]')")or die("problema en la conexion con la base de datos" .mysqli_error($conexion));
mysqli_close($conexion);
echo"El nota a sido registrada satisfactoriamente";

?>

<br>

</body>
</html>
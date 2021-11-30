<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Alta de empleados!</h1>
    	<input type="text" name="id" placeholder="id">
    	<input type="text" name="nombre" placeholder="Nombre completo">
		<input type="text" name="apellidos" placeholder="Apellidos">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("Empleado.php");
        ?>
</body>
</html>
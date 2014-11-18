<?php
session_start();
?>
<html>
<head>
<title>mi primer secion</title>
</head>
<body>
<?php	
if(isset($_SESSION['usuario'])){
	echo "<p><a href='cerrar.php'>Cerrar Sesion</a></p>";
	}else{
?>
	<form name="frmUser" method="POST" action="inicio.php">
	<tr>
	<td>Mi primer sesion ingrese su cuenta</td>
	<br>
	<br>
  <fieldset>
    <legend>Sesion:</legend>
	<tr>
	<td>Usuario</td>
	<td><input type="text" name="usuario"></td>
	</tr>
	<br>
	<td>Password</td>
	<td><input type="password" name="password"></td>
	<tr>
	<br>
	<td><input type="submit" name="Iniciar" value="inicio"></td>
	</tr>
	</fieldset>
	</form>
<?php
}
?>
</body>
</html>
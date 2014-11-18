<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
if(isset($_POST['usuario'])&& isset($_POST['password'])){
if($_POST['usuario']=='root' && $_POST['password']=='hola'){
	$_SESSION['usuario'] = $_POST['usuario'];
	echo "Bienvenido a la pagina ".$_POST['usuario'];
	}else{
	echo "contraseña incorrecta ";
}
}else{
	if(isset($_SESSION['usuario'])){
	echo "Has iniciado Sesion ".$_SESSION['usuario'];
   echo"<a href='cerrar.php'>Cerrar Sesion</a>";
}else{
echo "contraseña incorrecta";
}
}

?>
<br/><a href="sesion.php">regresar a la Pagina de inicio</a>
</body>
</html>
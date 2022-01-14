<?php

class CI_FormCorreo {

	public function FormCorreoShow($id,$mensaje,$correo)
	{
		
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario correo</title>
</head>

<body>
<?php
//echo "$id";  // imprimir id del producto
//$varcontra = $_GET["varcontra"];
//echo "$varcontra";?>
<form action="getFormCorreo.php?varID=<?php echo $id;?>" method="post" >
	 
<h1>Formulario correo</h1>
<p>Correo gmail <input type="email" placeholder="Ingrese correo gmail"  name="txtEmail"  value="<?php echo $correo;?>" disabled required> </p>

<input type="submit" value="Enviar" name="btnEnviar">
<input type="hidden" value="<?php echo $correo;?>" name="txtEmail">

<th><a href="restablecer.php"  >Volver</a></th>
<?php if($mensaje !="" || $mensaje !=null){ ?>
    <h2>Email no válido</h1>
<?php } ?>

</form>

<?php }}?>
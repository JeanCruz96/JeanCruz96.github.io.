<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Shared/PHPMailer/Exception.php';
require '../Shared/PHPMailer/PHPMailer.php';
require '../Shared/PHPMailer/SMTP.php';

class CI_Enviarcorreo{

    public function EnviarcorreoShow($varID){

session_start();         //REANUDAMOS LA SESION CREADA EN LA PAGINA getformCorreo.php
$varsesion=$_SESSION['email'];  //asignando el valor de la sesion creada=$email en getformCorreo.php a $varsesion
//$varID=$_GET["varID"];  //obtenemos el valor del id  enviado por el header location y lo guardamos en la variable #varID
//$varid=$_SESSION['id']; //guarda la sesion de valor=$varID en la variable $varid 
//$varid !=$varID esta comparacion sirve para eviten ingresar cuando cambian el valor del id por la url ,es decir deben ser iguales ya que se esta enviando el mismo valor y no diferentes.
if ( $varsesion == null ||  $varsesion=='' ) {
    echo "Acceso no permitido";
    ?>
    <form action="../index.php" method="post">
    <br>
    <input type="submit" value="Inicio">
    <?php
    die();              //Esto significa que ahi pare la aplicacion y nada de codigo que este por debajo se ejecute

}
$mail = new PHPMailer(true);  //Instanciando la clase PHPMailer

try {
    
    //Server settings
    $mail->SMTPDebug = 0;                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'affarex2021@gmail.com';                     // SMTP username
    $mail->Password   = 'affarex123456';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->IsHTML(true);
    //Recipients
    $mail->setFrom('affarex2021@gmail.com', 'Empresa Affarex'); //emisor
    $mail->addAddress($varsesion);     // receptor(es)
   
    // Content
    $mail->isHTML(true);                                  // para que el correo acepte formato HTML
    $mail->Subject = 'Restablecer Contrasenia';
    $mail->Body    =  ' 
    
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<form action="http://localhost:90/prueba06/moduloSeguridad/getFormRestablecerContrasenia.php?varid='.$varID.' " method="post" >
<h1>Formulario correo recibido</h1>
<h2>Ingresar al siguiente formulario</h2>
<input type="submit" value="Ingresar" name="btnEnviar">
</form>
</body>
</html>
    ' ;

    $mail->send();
    echo 'El mensaje se envio correctamente a su correo';
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar correo</title>
</head>
<body>
<br>
<br>
<form action="getComprobarDatos.php" method="post">
    <input type="submit" value="Volver" name="btnVolver">

    <input type="hidden" name="id" value="<?php echo $varID;?>">
    <input type="hidden" name="txtEmail" value="<?php echo $varsesion;?>">

    </form>

    <form action="../index.php" method="post">
    <input type="submit" value="Inicio">

    </form>
</body>
</html>

   <?php 
} catch (Exception $e) {
    echo 'Error al enviar el mensaje:', $e->ErrorInfo;
}
session_destroy(); //destruimos la sesiones(eliminamos sus valores) para que al actualizar la pagina o al acceder desde otra ventana no tenga acceso y evitar enviar varios correos 
}}
?>


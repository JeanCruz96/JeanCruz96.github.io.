<?php

    $boton = $_POST["btnEnviar"];  //Para validar el boton que proviene de CI_FormCorreo.php

    if (isset($boton)) 
    {
        $email = $_POST['txtEmail'];
       $varID=$_GET["varID"];
       //ValidarDatosFormCorreo
        if (strpos($email,'@gmail.com') and !Empty($email))
        {
            
            session_start(); //iniciamos sesion ,ojo no borrar
            $_SESSION['email']=$email; //estableciendo el valor de sesion=$email y continuaremos sesion en Enviarcorreo.php para guardar el email en $varsesion
            
           // $_SESSION['id']=$varID; //iniciamos sesion con el nombre id su valor=$varID  y enviarlo a Enviarcorreo-php
            require_once ("CI_Enviarcorreo.php");
            $enviarcorreo= new CI_Enviarcorreo();
            $enviarcorreo->EnviarcorreoShow($varID);

            
           // header("location:../Shared/Enviarcorreo.php?varID=$varID"); //enviamos el id de valor=$varID a Enviarcorreo.php tambien para despues compararlo con el de la sesion 
        }

        else
        {
            require_once ("CI_FormCorreo.php");

                $mensaje = new CI_FormCorreo();
                $mensaje->FormCorreoShow($varID,$mensaje,$email); //enviando el valor del id si el correo no es valido y enviando $mensaje como null para que aparezca email no valido en CI_FormCorreo
        }
    }

    else
    {
        require_once ("../Shared/CI_Mensaje.php");

       // $mensaje = new CI_Mensaje;
         $mensaje->MensajeShow("Acceso no permitido", "../index.php");
    }

?>
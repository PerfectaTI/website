<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(!empty($_POST["nombre"])   &&
           !empty($_POST["correo"])   &&
           !empty($_POST["telefono"]) &&
           !empty($_POST["mensaje"])  &&
           !empty($_POST["g-recaptcha-response"])){

            $secret ="6LcWIbAUAAAAAHLv6z5bJkrurZxrBadsdesqH_hQ";
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST["g-recaptcha-response"]);

            $responseData = json_decode($verifyResponse);

            // Sanear los datos recibidos
                $nombre_saneado   = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
                $correo_saneado   = filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL);
                $telefono_saneado = filter_var($_POST["telefono"], FILTER_SANITIZE_NUMBER_INT);
                $mensaje_saneado  = filter_var($_POST["mensaje"], FILTER_SANITIZE_URL);

                 // Validar los datos saneados
            if(!preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$correo_saneado)){
                echo "ERROR: Debe ingresar un email válido. Ej: hola@gmail.com";

                 }else if(!preg_match('/^([0-9]{9,15})$/', $telefono_saneado)){
                echo "ERROR: Debe ingresar un número de teléfono válido. Ej: 0981123123";

            }else if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$mensaje_saneado)){
                echo "ERROR: Debe ingresar un mensaje válido";

            }else if(strlen($mensaje_saneado)>500){
                echo "ERROR: Debe ingresar un mensaje más corto";

            }else if(!$responseData->success){
                echo "ERROR: Debe seleccionar que no es un robot.";

            }else{
                $para      = "contacto@perfecta.com.py";
                $cabecera  = "From: no-reply@perfecta.com.py\r\n";
                $cabecera .= "MIME-Version: 1.0\r\n";
                $cabecera .= "Content-type: text/html\r\n";
                $asunto    = "[PERFECTA]: Nuevo contacto desde la web";
                $template     = '
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta name="viewport" content="width=device-width">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            </head>

            <body bgcolor="#FFFFFF">
                <table bgcolor="#e9e9e9" style="width: 100%; border-top-left-radius: 3px; border-top-right-radius: 3px;">
                    <tbody>
                        <tr>
                            <td bgcolor="#e9e9e9">
                                <table style="width: 100%; padding-left: 25px; padding-right: 25px; padding-top: 5px; padding-bottom: 5px;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p style="font-size: 14px; color: #6E6E6E;">
                                                    '. $nombre_saneado . ' se ha contactado
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table bgcolor="#FAFAFA" style="width: 100%; border-left: 1px solid #F0F0F0; border-right: 1px solid #F0F0F0; border-bottom: 1px solid #F0F0F0;">
                    <tbody>
                        <tr>
                            <td>
                                <table bgcolor="#FFFFFF" style="width: 100%; padding-left: 25px; padding-right: 25px; padding-top: 15px; padding-bottom: 15px;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p style="font-size: 14px; color: #6E6E6E; margin-top: 0px; margin-bottom: 7px;"><b style="color: #6E6E6E">Nombre y Apellido: </b>' . $nombre_saneado . '</p>
                                                <p style="font-size: 14px; color: #6E6E6E; margin-top: 0px; margin-bottom: 7px;"><b style="color: #6E6E6E">E-mail: </b><a style="font-size: 14px; color: #6E6E6E;" href="mailto:' . $correo_saneado . '" target="_blank">' . $correo_saneado . '</a></p>
                                                <p style="font-size: 14px; color: #6E6E6E; margin-top: 0px; margin-bottom: 7px;"><b style="color: #6E6E6E">Teléfono: </b>' . $telefono_saneado . '</p>
                                                <p style="font-size: 14px; color: #6E6E6E; margin-top: 0px; margin-bottom: 7px;"><b style="color: #6E6E6E">Mensaje: </b>' . $mensaje_saneado . '</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>';
                if(mail($para, $asunto, $template, $cabecera)){
                    echo "Su mensaje ha sido enviado, muchas gracias";
                }else{
                    echo "No se pudo enviar su mensaje";
                }
            }
        }else{
            echo "ERROR: Debe completar todos los campos";
        }
    }else{
        echo "ERROR: Acceso denegado";
    }
?>

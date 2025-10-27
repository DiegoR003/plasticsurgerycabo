<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../include/phpMailer/Exception.php';
require '../include/phpMailer/PHPMailer.php';
require '../include/phpMailer/SMTP.php';

//Nombre
//Correo electronico
//Teléfono
//Asunto
//Seleccionó


if (isset($_REQUEST['submit']) and $_REQUEST['submit'] != "") {
  extract($_REQUEST);

} else {
  header('location:/admin/directorio/');
  exit;
}

$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = 0;                                       //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'plasticsurgerycabodr@gmail.com';       //SMTP username
  $mail->Password   = 'molstomqmbapjtqb';                     //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //MANDAMOS EL NOMBRE EN UNA VARIABLE PARA PODER AGREGARLE LAA COMILLA SIMPLE
  $psc = "Plastic Sugery Cabo | Web";
  //Recipients
  $mail->setFrom('plasticsurgerycabodr@gmail.com', $psc); //QUIEN MANDA, CON EL NOMBRE
  $mail->addAddress('plasticsurgerycabodr@gmail.com', 'Contacto desde el sitio web'); //QUIEN RECIBE


  //Content
  $mail->isHTML(true); //ACEPTAR HTML



  $mail->Subject = '' . $nombre . ' envió un mensaje desde la página.';

  $mail->Body    = '<!doctype html>
          <html lang="es">
          <head>
          <meta name="viewport" content="width=device-width">
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Correo electrónico</title>
          <style>
          
          
          @media only screen and (max-width: 620px) {
            table[class=body] h1 {
              font-size: 28px !important;
              margin-bottom: 10px !important;
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
              font-size: 16px !important;
              }
              table[class=body] .wrapper,
              table[class=body] .article {
                padding: 10px !important;
              }
              table[class=body] .content {
                padding: 0 !important;
              }
              table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
              }
              table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
              }
              table[class=body] .btn table {
                width: 100% !important;
              }
              table[class=body] .btn a {
                width: 100% !important;
              }
              table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
              }
            }
            @media all {
              .ExternalClass {
                width: 100%;
              }
              .ExternalClass,
              .ExternalClass p,
              .ExternalClass span,
                    .ExternalClass font,
                    .ExternalClass td,
                    .ExternalClass div {
                      line-height: 100%;
                    }
                    .apple-link a {
                      color: inherit !important;
                      font-family: inherit !important;
                      font-size: inherit !important;
                      font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
              }
              .btn-primary table td:hover {
                background-color: #34495e !important;
              }
              .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
              }
            }
            </style>
            </head>
            
            <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
            <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
            <tr>
            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
            <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
            <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">
            
            <div style="margin-top: 20px; margin-bottom: 20px;">
              <img style="display:block; margin:auto; max-width: 250px;" src="https://plasticsurgerycabo.com/logo.png" alt="">
            </div>
                        
                        <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">
                        
                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                        <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                          <tr>
                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                          
                          <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><strong>Nombre:</strong> ' . $nombre . '</p>
                          <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><strong>Correo electronico:</strong> ' . $email . '</p>
                          <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><strong>Teléfono:</strong> ' . $tel . '</p>
                          <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><strong>Asunto:</strong> ' . $asunto . '</p>
                          <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><strong>Seleccionó:</strong> ' . $interes . '</p>
                          <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;"><strong>Mensaje:</strong> ' . $mensaje . '</p>
                          
                          <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">¡Hasta pronto!</p>
                          
                          </td>
                          </tr>
                          </table>
                          </td>
                      </tr>
                      
                      <!-- END MAIN CONTENT AREA -->
                      </table>
                      
                      <!-- START FOOTER -->
                      <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                      <tr>
                          <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                          <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Copyright © 2022 <b>Plastic Surgery Cabo </b> - Todos los Derechos Reservados.</span>
                          <br>Los Cabos, B.C.S. México.
                          </td>
                          </tr>
                        <tr>
                        <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 12px; padding-top: 10px; font-size: 10px; color: #999999; text-align: center;">
                        Powered by <a href="https://plasticsurgerycabo.com/" style="color: #999999; font-size: 10px; text-align: center; text-decoration: none;"><strong>Plastic Surgery Cabo</strong>.</a>
                        </td>
                        </tr>
                        </table>
                        </div>
                    <!-- END FOOTER -->
                    
                    <!-- END CENTERED WHITE CONTAINER -->
                    </div>
                    </td>
                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
              </tr>
              </table>
              </body>
              </html>';




  $mail->CharSet = 'UTF-8';

  $mail->send();
  header('location:/en/contact.php?msg=oken'); //Exito en el cmabio
    exit;
} catch (Exception $e) {
  header('location:/en/contact.php?msg=erroren'); //Exito en el cmabio
    exit;
}

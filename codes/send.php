

<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';



if($_SERVER['REQUEST_METHOD']==='POST'){
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug =  0;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'RodrigoSanchoNet@gmail.com';                     //SMTP username
        $mail->Password   = '45!*dondeAcudo2415';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('rodrigosanchonet@gmail.com', 'Información');
        $mail->addAddress('rodrigosanchonet@gmail.com', 'Informacion');     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
       // $mail->addReplyTo('info@example.com', 'Information');
       // $mail->addCC('cc@example.com');
       // $mail->addBCC('bcc@example.com');
    
        //Attachments
         
        $contenido= '<h1>Mensaje nuevo desde contacto de la pag</h1>';
        $contenido.= '<p>Nombre: ' . $_POST['nombre']. '</p>';
        $contenido.= '<p>Correo: ' . $_POST['email']. '</p>';
        $contenido.= '<p>Teléfono: ' . $_POST['telefono']. '</p>';
        $contenido.= '<p>Mensaje: ' . $_POST['mensaje']. '</p>';
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contacto desde formulario';
        $mail->Body    = $contenido;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo $contenido;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


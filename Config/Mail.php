<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function enviarCorreo($destinatario, $asunto, $cuerpo) {
    $mail = new PHPMailer(true);
    
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.tudominio.com'; // Servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'tuemail@tudominio.com';
        $mail->Password = 'tucontraseña';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom('tuemail@tudominio.com', 'Tu Nombre');
        $mail->addAddress($destinatario);
        $mail->Subject = $asunto;
        $mail->Body = $cuerpo;
        $mail->isHTML(true);

        // Enviar correo
        $mail->send();
        return "Correo enviado correctamente.";
    } catch (Exception $e) {
        return "Error al enviar el correo: {$mail->ErrorInfo}";
    }
    
}

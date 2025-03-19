<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar las credenciales desde config.php
$config = include __DIR__ . '/../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nameuser = $_POST['nameuser'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $empresa = $_POST['empresa'];
    $descripcion = $_POST['descripcion'];

    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = $config['SMTP_USERNAME'];
        $mail->Password = $config['SMTP_PASSWORD'];
        $mail->SMTPSecure = 'tls'; // 'ssl' si usas el puerto 465
        $mail->Port = 587; 

        // Destinatario (correo de la empresa)
        $mail->setFrom($config['SMTP_USERNAME'], 'Servicios de Protección Profesional');
        $mail->addAddress($config['SMTP_USERNAME']); // Correo de la empresa donde se recibirán las solicitudes
        
        // Contenido del correo
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = "Nueva solicitud de contacto - Servicios de Protección Profesional";
        
        $mail->Body = "
        <html>
            <body style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;'>
                <div style='max-width: 600px; background: #ffffff; padding: 20px; border-radius: 5px; 
                            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);'>
                    <h2 style='color: #1a73e8;'>📩 Nueva solicitud de contacto</h2>
                    
                    <p>Se ha recibido una nueva solicitud de información a través del sitio web de 
                    <b>Servicios de Protección Profesional</b>. A continuación, los detalles:</p>
                    
                    <h3 style='color: #333;'>📌 Información del solicitante:</h3>
                    <p><b>Nombre:</b> $nameuser</p>
                    <p><b>Correo electrónico:</b> <a href='mailto:$correo'>$correo</a></p>
                    <p><b>Teléfono:</b> $telefono</p>
                    <p><b>Empresa:</b> $empresa</p>
                    
                    <h3 style='color: #333;'>📋 Descripción de la solicitud:</h3>
                    <p style='background: #f8f8f8; padding: 10px; border-radius: 5px;'>$descripcion</p>
                    
                    <p>Por favor, contactar a este usuario lo antes posible.</p>
                    
                    <br>
                    <p><i>proteccionprofesional.com</i></p>
                </div>
            </body>
        </html>";

        // Enviar correo
        $mail->send();
        
        // Redirigir con parámetros en la URL (para mostrar datos en el modal)
        // urlencode() para que se codifiquen caracteres especiales
        $location = sprintf(
            '../index.php?mensaje=success&nameuser=%s&correo=%s&telefono=%s&empresa=%s&descripcion=%s#cotizar',
            urlencode($nameuser),
            urlencode($correo),
            urlencode($telefono),
            urlencode($empresa),
            urlencode($descripcion)
        );
        header("Location: $location");
        exit();
        
    } catch (Exception $e) {
        // Redirigir a index.php con un mensaje de error
        header("Location: ../index.php?mensaje=error#cotizar");
        exit();
    }
}

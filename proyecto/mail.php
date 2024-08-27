<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false) {
    $phpmailer = new PHPMailer(true); // Habilitar excepciones
    try {
        $phpmailer->isSMTP();

        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '0afb3c8e3cf6cb';
$phpmailer->Password = 'a82b1d45b0a099';

        $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
        $phpmailer->addAddress($email, $name);

        $phpmailer->isHTML($html);
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $body;

        $phpmailer->send();
        return true;
    } catch (Exception $e) {
        echo 'Error al enviar el correo: ', $phpmailer->ErrorInfo;
        return false;
    }
}

<?php

require("mail.php");

function validate($name, $email, $subject, $message) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form"])) {

    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $subject = $_POST["subject"] ?? '';
    $message = $_POST["message"] ?? '';

    if (validate($name, $email, $subject, $message)) {
        $body = "$name <$email> te envía el siguiente mensaje: <br><br> $message";
        // MANDAR EL CORREO
        if (sendMail($subject, $body, $email, $name, true)) {
            $status = "success";
        } else {
            $status = "danger";
        }
    } else {
        $status = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de contacto</title>
</head>
<body>

    <?php if ($status == "danger"): ?>
        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>
    <?php endif; ?>
    
    <?php if ($status == "success"): ?>
        <div class="alert success">
            <span>Mensaje enviado con éxito</span>
        </div>
    <?php endif; ?>

    <form action="./" method="post">
        <h1>Contacto</h1>
        
        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>    

        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button type="submit" name="form">Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> Mi dirección</span>
            </div>
            <div class="info">
                <span><i class="fas fa-phone"></i>414525232</span>
            </div>
        </div>

    </form>

    <script src="https://kit.fontawesome.com/ed101913ac.js" crossorigin="anonymous"></script> 
</body>
</html>

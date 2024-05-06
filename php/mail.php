<?php
require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html = false){
    //configuracion inicial de nuestro servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    // $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    //Habilita la encryptacion para que los datos viajen seguro
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    // $phpmailer->Port = 2525;
    $phpmailer->Port = 465; //puerto que se usa para seguridad
    $phpmailer->Username = 'rluquetorres2021@gmail.com';
    $phpmailer->Password = 'ijkgqqjaldnpehuv';

    //Añadiendo destinatarios
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name);

     //Definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    //Mandar el correo
    $phpmailer->send();
}


?>
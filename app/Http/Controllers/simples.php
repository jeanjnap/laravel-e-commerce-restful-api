<?php

header('Content-Type: text/html; charset=UTF-8');

function sendMail($request)
{

    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer;


    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'mx1.hostinger.com.br'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'teste@camisetaexcelencia.com.br'; // SMTP username
    $mail->Password = 'Senha123'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->Charset = 'UTF-8'; //Para aceitar caracteres brasileiros

    $mail->setFrom('teste@camisetaexcelencia.com.br', 'Arena Baby');
    $mail->addAddress($request->email, 'Para'); // Add a recipient

    $mail->isHTML(true); // Set email format to HTML

    $mail->Subject = 'Verification code';
    $mail->Body = "Código de verificação: <b>$request->code</b>";
    $mail->AltBody = "Código de verificação: $request->code";

    if (!$mail->send()) {
        return 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return "Message has been sent to $request->email.";
    }
    /*
    $response = $request;

    return $response;
    */

}

function teste($request){
    return $request;
}

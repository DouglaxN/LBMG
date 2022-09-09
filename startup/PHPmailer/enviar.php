<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader cuidado com o caminho das pastas
require 'vendor/autoload.php';

if (isset($_POST['enviar'])) {
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dougnms12@gmail.com';                     //SMTP username
    $mail->Password   = '@Dougmns12';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dougnms12@gmail.com', 'Mailer');
    $mail->addAddress('dougnms12@gmail.com', 'Joe User');     //Add a recipient
    $mail->addReplyTo('dougnms12@gmail.com', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Orçamento de $_POST['nome']';
    $Body = "Mensagem enviada através do site, segue as informações: <br/>
        Nome: $_POST['nome'] <br/>
        E-mail: $_POST['email'] <br/>
        Menssagem: $_POST['mensagem']";
    $mail->Body = $Body;

    $mail->send();
    echo 'E-mail enviado com sucesso. A microciclo agradece seu contato!';
} catch (Exception $e) {
    echo "E-mail não enviado: {$mail->ErrorInfo}";
}      
}else {
    echo "Erro ao enviar e-mail, acesso não enviado via formulário"
}
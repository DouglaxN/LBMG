<?php
if (isset($_POST(['email']) && !empty($_POST(['email'])){

$nome = utf8_encode($_POST['nome']);
$email = utf8_encode($_POST['email']);
$mensagem = utf8_encode($_POST['mensagem']);

$to = "dougmns12@gmail.com";
$subject = "Contato - site LBMG "
$body = "Nome: ".$nome. "\n"
"E-mail: ".$email. "\n"
"Mensagem: ".$mensagem;

$header = "From:dougmns12@gmail.com"."\r\n"."Reply-To:".$email."/r/n"."X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){

    echo("Email enviado com sucesso!");
} else {
    echo("Email não pode ser enviado!");
}

// importação do arquivo da classe phpmailer
// require 'PHPMailer/PHPMailerAutoload.php';

// $mail = new PHPMailer;
// $mail->isSMTP();

// Configurações do servidor de e-mail

// $mail->Host = "smtp.gmail.com";
// $mail->Port = "587";
// $mail->SMTPSecure = "tls";
// $mail->SMTPAuth = "true";
// $mail->Username = "dougmns12@gmail.com";
// $mail->Password = "Dougmns12";

// Configuração da menssagem
// $mail->setFrom($mail->Usermane, $nome); // remetente
// $mail->addAddress('dougmns12@gmail.com'); //Destinatário
// $mail->Subject = "Contato site"; //Assunto do e-mail que vai chegar lá

// $conteudo_email = "Você recebeu uma mensagem de $nome ($email):
// <br>
// Mensagem: <br>
// $mensagem;
// "

// $mail->IsHTML(treu);
// $mail->Body = $conteudo_email;

// if ($mail->send()) {
// echo "E-mail enviado com sucesso"
// }else{
//     echo "Falha ao enviar o e-mail:" . $mail->ErrorInfo;
// }
}

?>
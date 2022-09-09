<?php
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    try {
        $mail->SetLanguage('br'); // Traduzir para pt-BR

        $mail->isSMTP(); // Seta para usar SMTP
        $mail->SMTPAuth = true; // Libera a autenticação
        $mail->SMTPDebug = 2; // Debug
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        $mail->Host = 'smt.gmail.com'; // SMTP Server
        $mail->Username = 'dougmns12@gmail.com'; // Usuário SMTP
        $mail->Password = '@Dougmns12'; // Senha do usuário
        $mail->Port = 587; // Porta do SMTP

        $mail->setFrom('nao-reponda@dominio.com.br', 'Nome'); // Email e nome de quem enviara o e-mail
        $mail->addReplyTo('atendimento@dominio.com.br', 'Nome'); // E-mail e nome de quem responderá o e-mail

        $mail->addAddress('destino@dominio.com.com', 'Nome do destino'); // Email e nome do destino
        //$mail->addCC('copia@dominio.com.br'); // Enviar cópiar do e-mail
        //$mail->addBCC('copiaoculta@dominio.com.br'); // Enviar uma cópia oculta

        //$mail->addAttachment('image.jpg', 'imagem.jpg'); // Anexa um arquivo

        $mail->isHTML(true); // Seta o envio em HTML
        $mail->CharSet = 'UTF-8'; // Charset da mensagem
        $mail->Subject = 'Contato do site LBMG'; // Título da mensagem
        $mail->Body = "Nome: ".$nome. "\n"
        "E-mail: ".$email. "\n"
        "Mensagem: ".$mensagem; // Mensagem
        $mail->AltBody = 'Ative o HTML da sua conta.'; // Mensagem alternativa
        $enviar = $mail->send(); // Envia e-mail

        if($enviar):
            echo 'Mensagem enviada com sucesso!';
        else:
            echo 'Erro ao enviar mensagem!<br>';
            echo 'Erro: '.$mail->ErrorInfo;
        endif;
    }catch(Exception $e){
        echo 'Erro ao enviar mensagem!';
        echo 'Erro: '.$mail->ErrorInfo;
    }

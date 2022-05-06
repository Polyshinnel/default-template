<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../library/phpmailer/vendor/autoload.php';
include '../../config/config-site.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

$typeMail = $_POST['type'];
$mailAddr = $_POST['mailAddr'];

if($typeMail == 'confirm'){
    $subject = 'Код подтверждения регистрации';
    $text = '<h2>Поздравляем с регистрацией в личном кабинете</h2><p>Ваш код подтверждения</p>';
    $confirmCode = $_POST['confirmCode'];
    $text.='<h4>'.$confirmCode.'</h4>';
}

if($typeMail == 'restore'){
    $subject = 'Восстановление пароля';
    $url = $_POST['url'];
    $text = '<h2>Запущен процесс восстановления пароля</h2><p>Для сброса пароля перейдите по ссылке:</p><p><a href="'.$url.'">'.$url.'</a></p>';
}

try {
    $mail->isSMTP();                                          
    $mail->Host       = 'ssl://smtp.yandex.ru';              
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = mailName;             
    $mail->Password   = mailPass;                           
    $mail->SMTPSecure = 'ssl';           //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(mailName, notifyName);
    $mail->addAddress($mailAddr);     //Add a recipient

    $sign = '<br><br><br><br>--<br><img src="'.signLogo.'"><br><p style="margin:0;font-size:14px;">С уважением</p><p style="margin:0;font-size:14px;">'.signText.'</p><p style="margin:0;font-size:14px;">'.signPhone.'</p><p style="margin:0;font-size:14px;">'.signMail.'</p>';

    $text .= $sign;

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $text;

    $mail->send();
    echo 'Письмо отравлено!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
<?php
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name'])){
    $name=trim($_POST['name']);
}
if(isset($_POST['number'])){
    $number=trim($_POST['number']);
}
if(isset($_POST['theme'])){
    $theme=trim($_POST['theme']);
}else{
    $theme='';
}
if(isset($_POST['maintext'])){
    $maintext=trim($_POST['maintext']);
}else{
    $maintext='';
}
if(isset($_POST['name_popup'])){
    $name=trim($_POST['name_popup']);
}
if(isset($_POST['number_popup'])){
    $number=trim($_POST['number_popup']);
}
if(!empty($name) && !empty($number)){
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $subject = 'Заявка от '.$name;
    $body = '<p><b>Имя: </b>'.$name.'</p><p><b>Телефон: </b>'.$number.'</p>
    <p><b>Тема сообщения: </b>'.$theme.'</p><p><p><b>Сообщение: </b>'.$maintext.'</p><p>';
    $mail = mail('office@dgs.ru', $subject, $body, $headers);
    if(!$mail) {
        echo 'Message could not be sent.';
    } else {
        echo 1;
    }
//проверяем отправку
//    $mail = new PHPMailer();
//
//    $mail -> isSMTP(true);
//
//    $mail->SMTPDebug = 0;
//
//    $mail->Debugoutput = 'html';
//
//    $mail->SMTPSecure = 'ssl';
//
//    $mail->SMTPAuth = true;
//
//
//    $mail -> Host       = 'smtp.gmail.com';
//    $mail -> Username   = 'sibiriannomad@gmail.com';
//    $mail -> Password   = 'Faraon25';
//    $mail -> Port       = 465;
//    $mail -> setFrom('sibiriannomad@gmail.com', 'Заявка от клиента');
//    $mail -> addAddress('ekurchenko@yahoo.com');
//
//
//    $mail -> Subject = 'Заявка от '.$name;
//    $mail -> Body = '<p><b>Имя: </b>'.$name.'</p><p><b>Телефон: </b>'.$number.'</p>
//    <p><b>Тема сообщения: </b>'.$theme.'</p><p><p><b>Сообщение: </b>'.$maintext.'</p><p>';
//    if(!$mail->send()) {
//        echo 'Message could not be sent.';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//    } else {
//        echo 1;
//    }


}
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

    $mail = new PHPMailer();

    $mail -> isSMTP();   
    $mail -> CharSet = "UTF-8";
    $mail -> SMTPAuth   = true;
    $mail -> Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    $mail -> Host       = 'smtp.gmail.com'; 
    $mail -> Username   = 'sibiriannomad@gmail.com';
    $mail -> Password   = 'Faraon25'; 
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port       = 465;
    $mail -> setFrom('sibiriannomad@gmail.com', 'Заявка от клиента'); 
    $mail -> addAddress('ekurchenko@yahoo.com'); 
    
    $mail -> isHTML(true);
    $mail -> Subject = 'Заявка от '.$name;
    $mail -> Body = '<p><b>Имя: </b>'.$name.'</p><p><b>Телефон: </b>'.$number.'</p>
    <p><b>Тема сообщения: </b>'.$theme.'</p><p><p><b>Сообщение: </b>'.$maintext.'</p><p>';
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
       } else {
        echo 1;
       }  
   
}
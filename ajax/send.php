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
    try{
    $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->Host = 'smtp-pulse.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sibiriannomad@gmail.com';
        $mail->Password = 'QiRadWtajCn8E3D';
        $mail->setFrom('no-reply@dgs.ru', 'Заявка от клиента');
        $mail->SMTPSecure = 'tls';
        $mail->Port = '587';
        $mail->CharSet = 'UTF-8';
        $mail->addAddress('office@dgs.ru');
        $mail->isHTML(true);
        $mail->Subject = 'Заявка от '.$name;
        $mail->Body = 'Hello!';
        $mail->SMTPDebug = 1;
            $mail->Body = '<p><b>Имя: </b>'.$name.'</p><p><b>Телефон: </b>'.$number.'</p>
    <p><b>Тема сообщения: </b>'.$theme.'</p><p><p><b>Сообщение: </b>'.$maintext.'</p><p>';
        $mail->send();
    echo 1;
}catch(Exception $e) {
    echo "Ошибка отправки:".$mail->ErrorInfo;

}
}

<?php
require_once 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;

$mail->Host= 'smtp.gmail.com';
$mail->Username = 'ericjaucian@gmail.com';
$mail->Password = 'DAMNIT!@#$%^&';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;


$mail->From = 'ericjaucian@gmail.com';
$mail->FromName = 'Eric Jaucian';
$mail->addReplyTo('reply@gmail.com','Reply Address');
$mail->addAddress('ericjaucian@dwc-legazpi.edu','Eric Jaucian');
$mail->addCC('ericjaucian@dwc-legazpi.edu','Eric Jaucian');
$mail->addBCC('ericjaucian@gmail.com','Eric Jaucian');

$mail->Subject='Here is an Email';
$mail->Body='This is the body';
$mail->AltBody='This is the body';

$mail->send();
?>
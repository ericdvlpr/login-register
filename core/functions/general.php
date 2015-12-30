<?php
require_once 'libs/PHPMailer/PHPMailerAutoload.php';
function email($to, $subject, $body){
		
		$mail = new PHPMailer;

		$mail->isSMTP();
		$mail->SMTPAuth = true;

		$mail->Host= 'smtp.gmail.com';
		$mail->Username = 'ericjaucian@gmail.com';
		$mail->Password = 'DAMNIT!@#$%^&';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;


		$mail->From = "ericjaucian@gmail.com";
		$mail->FromName = "Eric Jaucian";
		$mail->addReplyTo("reply@gmail.com","Reply Address");
		$mail->addAddress("$to","End-User");
		$mail->addBCC("ericjaucian@gmail.com","Eric Jaucian");

		$mail->Subject="$subject";
		$mail->Body="$body";
		$mail->AltBody="$body";

		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			echo "You've successfull registered";
			}
}

function logged_in_redirect(){
	if(logged_in()===true){
		header("Location:index.php");
		exit();
	}	
}
function protect_page(){
	if(logged_in()===false){
		header("Location:login.php");
		exit();
	}	
}

function admin_protect(){
	global $user_data;
	if(has_access($user_data['user_id'],1) == false){
		header("Location:index.php");
		exit();
	}

}
function data_sanitize(&$info){
	$info=htmlentities(strip_tags(mysql_real_escape_string($info)));

}
function array_sanitize(&$item){
	$item=htmlentities(strip_tags(mysql_real_escape_string($item)));
}

function sanitize($data){
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
}
function output_errors($errors){
	return '<p>'.implode('',$errors).'</p>';
}

?>
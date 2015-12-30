<?php 
	include 'init.php';
if(empty($_POST) === false){
	 $username = $_POST['username'];
	  $password = $_POST['password'];

	 if(empty($username) === true || empty($password) === true){
	 	$errors[]="You need to enter a username and password";
	 	
	 }else if(user_exists($username)===false){
	 	$errors[]="Username does not exist";
	 }else if(user_active($username)===false){
	 	$errors[]="You have not Activated your Account";
	 }else{
			$login = login($username, $password);
	 	if($login ===false){
	 		$errors[] = "ERROR DAMINT!";
	 		}else{
	 			$_SESSION['user_id']=$login;
	 			header("Location:../index.php");
	 			exit();
	 		}
	 	}
	 }

echo output_errors($errors);
?>
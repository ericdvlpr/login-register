<?php 
include 'core/init.php';
if(isset($_GET['success'])===true && empty($_GET['success'])===true)
{
	echo "<h2>THANKS, we've activated your account</h2>";
}else if(isset($_GET['email'], $_GET['email_code'] ) === true){
	 $email = trim($_GET['email']);
	 $email_code = trim($_GET['email_code']);

		if(email_exists($email) === false ){
			$errors[] = 'Opps, your email does not exist';
		}else if (activate($email, $email_code) === false) {
			$errors[] = 'We had a problem activating your account';

		}

		if(empty($errors)===false){

			echo output_errors($errors);

		}else
		{
			header('Location:activate.php?success');
			exit();
		}
}
else
{
	header('Location:login.php');
	exit();
}

?>
					
			</div>

		</div>
</div>
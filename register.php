<?php include 'core/init.php';

 include 'includes/overall/overall_header.php';
 
 if(empty($_POST)===false){
	$required_fields = array('username','password','conf_password','first_name','email');
	foreach($_POST as $key => $value){
		if(empty($value)&& in_array($key, $required_fields)===true){
				$errors[] = 'Field is required';
		}
	}
	if (empty($errors)===true) {
		if(user_exists($_POST['username'])){
			$errors[]='Sorry the username \''.$_POST['username'].'\'is already taken <br />';
		}
		if(preg_match("/\\s/", $_POST['username'])){
			$errors[]='Your username must not contain any spaces <br />';

		}
		if (strlen($_POST['password'])<6) {
			$errors[]='Your password must be atleast 6 characters <br />';
		}
		if ($_POST['password'] !== $_POST['conf_password']) {
			$errors[]='Your passwords do not match';
		}
		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)=== false)
		{
			$errors[]='Not a valid email address is required <br />';
		}
		if(email_exists($_POST['email'])=== true)
		{
			$errors[]='Sorry the email \''.$_POST['email'].'\'does not exist <br />';
		}
	}
}
?>


			<div class="col-xs-12 col-md-8" id="content">
					<div class="page-header">
						<h3>User Registration <small>Control Panel</small></h3>
						<div id="crumb">
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Library</a></li>
						  <li class="active">Data</li>
						</ol>
						</div>
					</div>
		
						 	<?php
						 	if(isset($_GET['success'])&& empty($_GET['success'])){
						 		echo "You've successfull registered";
						 	}else{
						 		if(empty($_POST)=== false && empty($errors)===true){
						 				$register_data = array(
						 					'username'   => $_POST['username'],
						 					'password'   => $_POST['password'],
						 					'first_name' => $_POST['first_name'],
						 					'last_name'  => $_POST['last_name'],
						 					'email'      => $_POST['email'],
						 					'email_code'  => md5($_POST['username'] + microtime()),
						 					);
						 				register_user($register_data);
						 				header('location:register.php?success');
						 				exit();
						 		}elseif (empty($errors)===false){
						 			echo output_errors($errors);
						 		}
						 	}
						 	?>
						 		<form action="" method="post" class="form-horizontal">
	
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Username &nbsp;&nbsp; </label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="username" placeholder="Username">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Password &nbsp;&nbsp; </label>
										    <div class="col-sm-9">
										      <input type="password" class="form-control" name="password" placeholder="Password">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password &nbsp;&nbsp; </label>
										    <div class="col-sm-9">
										      <input type="password" class="form-control" name="conf_password" placeholder="Confirm Password">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">First Name &nbsp;&nbsp; </label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="first_name" placeholder="First Name">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Last Name &nbsp;&nbsp; </label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="last_name" placeholder="Last Name">
										    </div>
										  </div>
						 				<div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Email &nbsp;&nbsp; </label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" name="email" placeholder="Email">
										    </div>
										  </div>
										  <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <button type="submit" class="btn btn-default">Register</button>
										    </div>
										  </div>
						 		</form>
						
					</div>
			
<?php include 'includes/overall/overall_footer.php';?>
<?php include 'core/init.php';
protect_page();
if(empty($_POST)===false){
	$required_fields = array('current_password','password','password_again');
	foreach($_POST as $key => $value){
		if(empty($value)&& in_array($key, $required_fields)===true){
				$errors[] = "<div class='alert alert-danger alert-dismissible' role='alert'>
										  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
										  <strong>Field require.</strong>
										</div>";
			break 1;
		}
	}
	//compare current password with stored password in db
	if(md5($_POST['current_password'])===$user_data['password']){
				if (trim($_POST['password'])!==trim($_POST['password_again'])) {
							$errors[]= "<div class='alert alert-danger alert-dismissible' role='alert'>
										  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
										  <strong>Your New passwords do not match.</strong>
										</div>";
				}else{
					//
				}
	}else{
		$errors[]= "<div class='alert alert-danger alert-dismissible' role='alert'>
										  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
										  <strong>Your Current password is incorrect.</strong>
										</div>";
	}
}
include 'includes/overall/overall_header.php';
 
?>
<div class="col-xs-12 col-md-8" id="content">
					<div class="page-header">
						<h3>Change Password <small>Control Panel</small></h3>
						<div id="crumb">
						<ol class="breadcrumb">
						  <li><a href="#">User account</a></li>
						  <li class="active">Change password</li>
						</ol>
						</div>
					</div>
						<?php
					if(isset($_GET['success'])){
							echo "SUCCESS";
						}else{
								if(empty($_POST)=== false && empty($errors)===true){
									change_password($session_user_id, $_POST['password']);
									header("location:changepassword.php?success");
								}else if(empty($errors)===false){
									echo output_errors($errors);
								}
								?>
							<form action="" method="post" class="form-horizontal">
												
												  <div class="form-group">
												    <label for="inputEmail3" class="col-sm-2 control-label">Current Password &nbsp;&nbsp; </label>
												    <div class="col-sm-9">
												      <input type="password" class="form-control" name="current_password" placeholder="Current Password" >
												    </div>
												  </div>
												  <div class="form-group">
												    <label for="inputPassword3" class="col-sm-2 control-label">New Password &nbsp;&nbsp; </label>
												    <div class="col-sm-9">
												      <input type="password" class="form-control" name="password" placeholder="New Password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
												    </div>
												  </div>
												  <div class="form-group">
												    <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password &nbsp;&nbsp; </label>
												    <div class="col-sm-9">
												      <input type="password" class="form-control" name="password_again" placeholder="Confirm Password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
												    </div>
												  </div>
												 
												  <div class="form-group">
												    <div class="col-sm-offset-2 col-sm-10">
												      <button type="submit" class="btn btn-default">Change</button>
												    </div>
												  </div>
								 		</form>
						
<?php 
}		
include 'includes/overall/overall_footer.php';?>
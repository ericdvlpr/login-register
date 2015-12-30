<?php include 'core/init.php';
protect_page();

include 'includes/overall/overall_header.php';
 
 if(empty($_POST)===false){
	$required_fields = array('first_name','last_name','email');
	foreach($_POST as $key => $value){
		if(empty($value)&& in_array($key, $required_fields)===true){
				$errors[] = 'Field is required';
				break 1;
		}
	} 
	if(empty($errors)=== true){
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)===false) {
			$errors[]= 'A valid email address is required';
		}else if(email_exists($_POST['email'])===true && $user_data['email'] != $_POST['email']){
			$errors[]= 'Sorry Email does not match';
		}
	}
}
?>
<div class="col-xs-12 col-md-8" id="content">
					<div class="page-header">
						<h3>Update User Profile <small>Control Panel</small></h3>
						<div id="crumb">
						<ol class="breadcrumb">
						  <li><a href="#">User account</a></li>
						  <li class="active">Update User Profile</li>
						</ol>
						</div>
					</div>
						<?php
						if(isset($_GET['success'])=== true && empty($_GET['success'])=== true){
							echo "Details has been updated";
						}
						else
						{
								if(empty($_POST) == false && empty($errors) == true){
									
										$update_data=array(
											'first_name' => $_POST['first_name'],
											'last_name' => $_POST['last_name'],
											'email' => $_POST['email'],
											'allow_email' => ($_POST['allow_email']=='on') ? 1 : 0
											);
										update_user($update_data);
										header('location:settings.php?success');
										exit();
								}else if(empty($errors)==false){
									echo output_errors($errors);
								}

								?>
									<form action="" method="post" class="form-horizontal">
														
														  <div class="form-group">
														    <label for="inputEmail3" class="col-sm-2 control-label">First Name &nbsp;&nbsp; </label>
														    <div class="col-sm-9">
														      <input type="text" class="form-control" name="first_name" value="<?php echo $user_data['first_name'];?>" />
														    </div>
														  </div>
														  <div class="form-group">
														    <label for="inputPassword3" class="col-sm-2 control-label">Last Name &nbsp;&nbsp; </label>
														    <div class="col-sm-9">
														      <input type="text" class="form-control" name="last_name" value="<?php echo $user_data['last_name'];?>" />
														    </div>
														  </div>
														  <div class="form-group">
														    <label for="inputPassword3" class="col-sm-2 control-label">Email &nbsp;&nbsp; </label>
														    <div class="col-sm-9">
														      <input type="email" class="form-control" name="email" value="<?php echo $user_data['email'];?>"/>
														    </div>
														  </div>
														  <div class="form-group">
														    
														    <div class="col-sm-9">
														      <input type="checkbox" name="allow_email" <?php if($user_data['allow_email']==1){echo 'checked="checked"';}?>> Would you like to receive an email
														    </div>
														  </div>
														  <div class="form-group">
														    <div class="col-sm-offset-2 col-sm-10">
														      <button type="submit" class="btn btn-default">Update</button>
														    </div>
														  </div>
										 		</form>
						
<?php 
}		
include 'includes/overall/overall_footer.php';?>
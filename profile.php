<?php include 'core/init.php';
protect_page();

include 'includes/overall/overall_header.php';

if (isset($_GET['username'])=== true && empty($_GET['username'])=== false) {
 		$username = $_GET['username'];

	if(user_exists($username)=== true){
	 		$user_id = user_id_from_username($username);
	 		$profile_data = user_data($user_id,'first_name','last_name','email');
 		}else{
 			echo "Sorry, that user does not exist";
 		}
 } else{
 	header("Location:index.php");
 	exit();
 }

?>
<div class="col-xs-12 col-md-8" id="content">
					<div class="page-header">
						<h3><?php echo $profile_data['first_name'];?>'s Profile</h3>
						<div id="crumb">
						<ol class="breadcrumb">
						  <li><a href="#">User account</a></li>
						  <li class="active">Profile</li>
						</ol>
						</div>
					</div>
					<?php
						if(isset($_FILES['profile'])===true){
							if (empty($_FILES['profile']['name'])==true) {
								echo "Please Choose a file";
							}else{
								$allowed = array('jpg','jpeg','gif','png', );
								$file_name = $_FILES['profile']['name'];
								$file_extn = strtolower(end(explode('.',$file_name)));
								$file_temp = $_FILES['profile']['tmp_name'];

								if(in_array($file_extn, $allowed)==true){
									profile_image($session_user_id, $file_temp,$file_extn);
									header('Location:'.$current_file);
								}else{
									echo 'Incorrect file type. Allowed:';
									echo implode(',', $allowed);
								}
							}
						}

						if(empty($user_data['profile']) ===false){
							echo '<img src="'.$user_data['profile'].'"alt="'.$user_data['first_name'].'">';
						}

					?>
					<form action="" method="post" class="form-horizontal" enctype="multipart/form-data" >
														  <div class="form-group">
														    <label for="inputPassword3" class="col-sm-2 control-label">Profile Picture&nbsp;&nbsp; </label>
														    <div class="col-sm-9">
														      <input type="file" class="form-control" name="profile" />
														    </div>
														  </div>
														  
														  <div class="form-group">
														    <div class="col-sm-offset-2 col-sm-10">
														      <button type="submit" class="btn btn-default">Submit</button>
														    </div>
														  </div>
										 		</form>
			</div>			
								
						
<?php 
		
include 'includes/overall/overall_footer.php';?>
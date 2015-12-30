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
		
include 'includes/overall/overall_footer.php';?>
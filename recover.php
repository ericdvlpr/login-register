<?php 
include 'core/init.php';
logged_in_redirect();

?>
 <link href="css/bootstrap.css" rel="stylesheet">
<div class="page-header">
		<h1>Recover</h1>
</div>
<?php
if(isset($_GET['success'])==true && empty($_GET['success'])=== true){
?>
<p>Thank! we emailed you</p>
<?php
			}else{
				$mode_allowed = array('username','password');
				if(isset($_GET['mode']) == true && in_array($_GET['mode'], $mode_allowed)== true ){
						if(isset($_POST['email'])==true && empty($_POST['email'])==false){
							if(email_exists($_POST['email'])===true){
								recover($_GET['mode'], $_POST['email']);
								header('location:recover.php?success');
								exit();
							}else{
								echo '<p>Email Does not Exist</p>';
							}
						}

					?>

					 <form class="form-horizontal" action="" method="post">
					      <div class="form-group">
					        <label for="username" class="col-sm-2 control-label">Please enter your Email Address:</label>
					        <div class="col-sm-10">
					          <input type="email" class="form-control" name="email" placeholder="Username" required>
					        </div>
					      </div>
					      <div class="form-group">
					        <div class="col-sm-offset-2 col-sm-10">
					          <button type="submit" class="btn btn-default">Recover</button>
					        </div>
					      </div>	
					</form>
				<?php	
				}else{
					header('location: index.php');
					exit();
				}
			}
?>
		
<?php include 'includes/overall/overall_footer.php';?>
    <script src="js/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<?php 
include 'core/init.php';
protect_page();
admin_protect();
include 'includes/overall/overall_header.php';
?>

			<div class="col-xs-12 col-sm-6 col-md-8" id="content">
					<div class="page-header">
						<h3>Email for all users <small>Control Panel</small></h3>
						
					</div>
					<?php
					if(isset($_GET['success'])){
						echo "Email has been sent";
					}else{
							if(empty($_POST)=== false){
								if (empty($_POST['subject'])===true) {
									$errors[]= 'Subject is required';
								}
								if(email_exists($_POST['body'])===true){
									$errors[]= 'Body is required';
								}
								if (empty($errors)===false) {
									echo output_errors($errors);
								}else{
									//send email
									mail_user($_POST['subject'],$_POST['body']);
									header('Location:mail.php?success');
									exit();
								}
							}
						
					?>
					<div class="row">
							<form action="" method="post">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Subject:</label>
						    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Body:</label>
						    <textarea class="form-control" rows="3" name="body" required></textarea>
						  </div>

						  <button type="submit" class="btn btn-default">Send</button>
						</form>
					</div>
					
			</div>

		</div>
</div>
<?php 
}
include 'includes/overall/overall_footer.php';?>
<?php require 'core/init.php';?>

<?php
if(isset($_GET['success']) && empty($_GET['success'])){
	echo "SUCCESS!";
}

if (empty($_POST)===false && empty($errors) === true) {

$student_data= array (
		'track' => $_POST['track'],
		'strands' => $_POST['strands'],
		'name' => $_POST['stud_name'],
		'age' => $_POST['age'],
		'date_birth' => $_POST['date_birth'],
		'place_birth' => $_POST['pl_birth'],
		'hm_ad' => $_POST['hm_add'],
		'ct_ad' => $_POST['ct_add'],
		'cnt_num' => $_POST['cnt_num'],
		'em_ad' => $_POST['eml_add'],
		'ctzen' => $_POST['ctzenshp'],
		'relgn' => $_POST['rel'],
		'cv_stat' => $_POST['cv_stat'],
		'sex' => $_POST['sex'],
		'lvng_cond' => $_POST['lv_con'],
		'fr_name' => $_POST['fr_name'],
		'fr_occ' => $_POST['fr_occ'],
		'fr_bus_ad' => $_POST['fr_busad'],
		'mthr_name' => $_POST['mthr_name'],
		'mthr_occ' => $_POST['mthr_occ'],
		'mthr_bus_ad' => $_POST['mthr_busad'],
		'mrt_stat' => $_POST['mrt_stat'],
		'brth_order' => $_POST['brth_ordr'],
		'grdian' => $_POST['grdns'],
		'grdian_add' => $_POST['grdn_add'],
		'grdian_lndlne' => $_POST['grdn_lndline'],
		'grdian_cp' => $_POST['grdn_cp'],
		'rel_grdian' => $_POST['rel_grdn'],
		'nm_sch_elem' => $_POST['nm_sch_elem'],
		'yr_attnd_elem' => $_POST['yr_attnd_elem'],
		'hnr_rcvd_elem' => $_POST['hnr_rcvd_elem'],
		'nm_sch_hs' => $_POST['nm_sch_hs'],
		'yr_attnd_hs' => $_POST['yr_attnd_hs'],
		'hnr_rcvd_hs' => $_POST['hnr_rcvd_hs'],
		'sp_skills' => $_POST['skills'],
		'hobbies' => $_POST['hobbies'],
		'goals' => $_POST['goals'],	
		'gding_prncple' => $_POST['prcnple'],		
		'abt_urslf' => $_POST['abt_urslf'],
	);

	register_student($student_data);
	header('location:registration_form.php?success');
	exit();
}
else if(empty($errors)===false)
{
	echo output_errors($error);
}
?>
		<title>DWCL Senior High School Registration Form</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<div class="container">
			<div class="row">
				<div class="page-header">
					<h1>Online Senior High School Registration Form</h1>
				</div>
				<form action="" method="post" class="form-horizontal">
					<h3>Please Select a Track</h3>
					<div class="form-group">
						
					    <div class="col-sm-6">
					      	<select class="form-control" name="track"   onchange="function()">
					      	  <option>Please Select</option>
							  <option>ACADEMIC</option>
							  <option>TECHNICAL-VOCATIONAL LIVELIHOOD</option>
							</select>
					    </div>
					</div>
					
					<div class="form-group">
						<h3>Please Select a Academic Track</h3>
					    <div class="col-sm-6">
					      	<select class="form-control" name="strands"   onchange="function()">
					      	  <option>Please Select</option>
							  <option>ABM</option>
							  <option>STEM</option>
							  <option>GAS</option>
							  <option>Cookery</option>
							  <option>Food and Beverages</option>
							  <option>Bread and Pastery Production</option>
							  <option>Housekeeping</option>
							</select>
					    </div>
					</div>
				<h3><strong>I. PERSONAL AND FAMILY DATA</strong></h3>
				  <div class="form-group">
				    <label  class="sr-only">Name</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="stud_name" placeholder="First Name Middle Name, Last Name">
				    </div>
				  </div>
				   <div class="form-group">
				    <label  class="sr-only">Age</label>
				    <div class="col-sm-2">
				       <input type="number" class="form-control" size="6" name="age" min="15" max="99" placeholder="Age">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Date of Birth</label>
				    <div class="col-sm-3">
				      <input type="date" required class="form-control" name="date_birth" >
				    </div>
				  </div>
			
			
				   <div class="form-group">
				    <label  class="sr-only">Place of Birth</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="pl_birth" placeholder="Place of Birth">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Home Address</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="hm_add" placeholder="Home Address">
				    </div>
				  </div>
				<div class="form-group">
				    <label  class="sr-only">City Address</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="ct_add" placeholder="City Address">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Contact Number</label>
				    <div class="col-sm-6">
				      <input type="tel" required class="form-control" name="cnt_num" placeholder="Contact Number" pattern="[7-9]{1}[0-9]{9}" size="11">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Email Address</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="eml_add" placeholder="Email Address">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Citizenship</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="ctzenshp" placeholder="Citizenship">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Religion</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="rel" placeholder="Religion">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Civil Status</label>
				    <div class="col-sm-6">
				     <select name="cv_stat" class="form-control">
				 			<option>Please Select</option>
				 			<option>Single</option>
				 			<option>Married</option>
				 			<option>Widow/ Widower</option>
				 			<option>Annulled</option>
				 			<option>Other</option>

				 		</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Sex</label>
				    <div class="col-sm-6">
				      <select name="sex" class="form-control">
				 			<option>Please Select</option>
				 			<option>Male</option>
				 			<option>Female</option>
				 			<option>Others</option>

				 		</select>
				    </div>
				  </div>
				  <div class="form-group">
				  <p>Living Condition: Please Select one of th condition:</p>
				 		<div class="col-sm-3">
				 		<select name="lv_con" class="form-control">
				 			<option>Please Select</option>
				 			<option>In a dormitory</option>
				 			<option>as bed space</option>
				 			<option>with parents</option>
				 			<option>with siblings</option>
				 			<option>with relatives</option>
				 			<option>Others</option>

				 		</select>
				 		</div>
						 <div class="col-sm-3">
							<input type="text" required class="form-control" name="lvn_othr" placeholder="Please Specify">
				 		</div>
				 		
					</div>	
 					<div class="form-group">
				    <label  class="sr-only">Father's Name</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="fr_name" placeholder="Father's Name">
				    </div>
				  </div>
					<div class="form-group">
				    <label  class="sr-only">Mother's Name</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="mthr_name" placeholder="Mother's Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Contact Number</label>
				    <div class="col-sm-6">
				      <input type="tel" required class="form-control" name="cnt_nmbr" placeholder="Contact Number">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Father Occupation:</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="fr_occ" placeholder="Father Occupation">
				    </div>
				    </div>
				     <div class="form-group">
				    <label  class="sr-only">Business Address:</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="fr_busad" placeholder="Business Address:">
				    </div>
				  </div>
				  <div class="form-group">
				  
				    <label  class="sr-only">Mother:</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="mthr_occ" placeholder="Mother Occupation">
				    </div>
				    </div>
				     <div class="form-group">
				    <label  class="sr-only">Business Address:</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="mthr_busad" placeholder="Business Address:">
				    </div>
				  </div>
				  <div class="form-group">
				  <p>Marital Status of Parents:</p>
				 		<div class="col-sm-3">
				 			<select class="form-control" name="mrt_stat">
				 				<option>Please Select</option>
				 				<option>Living Together</option>
				 				<option>Widow/Widower</option>
				 				<option>Annulled</option>
				 				<option>Other</option>
				 			</select>
				 		</div>
				 		<div class="col-sm-3">
				 			<input type="text" required class="form-control" name="mrt_stat_othr" placeholder="Please Specify">s
						</div>
					</div>
					<div class="form-group">
				  <p>Birth Order in the Family:</p>
				 		<div class="col-sm-3">
				 			<select class="form-control" name="brth_ordr">
				 				<option>Please Select</option>
				 				<option>1st</option>
				 				<option>2nd</option>
				 				<option>3rd</option>
				 				<option>4th</option>
				 				<option>5th</option>
				 				<option>Other</option>
				 			</select>
				 		</div>
				 		<div class="col-sm-3">
				 			<input type="text" required class="form-control" name="brth_ordr_othr" placeholder="Please Specify">s
						</div>
					</div>
					<div class="form-group">
				    <label  class="sr-only">Guardian(if not living with Parents):</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="grdns" placeholder="Guardian (if not living with Parents)">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Address:</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="grdn_add" placeholder="Address">
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Landline:</label>
				    <div class="col-sm-6">
				      <input type="tel" required class="form-control" name="grdn_lndline" placeholder="Landline">
				    </div>
				    
				  </div>
				  <div class="form-group">
				  	<label  class="sr-only">Cellphone No:</label>
				    <div class="col-sm-6">
				      <input type="tel" required class="form-control" name="grdn_cp" placeholder="Cellphone No">
				    </div>

				  </div>
				   <div class="form-group">
				    <label  class="sr-only">Relation with Guardian:</label>
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="rel_grdn" placeholder="Relation With Guardian">
				    </div>
				  </div>
				  <h3><strong>II. EDUCATIONAL BACKGROUND</strong></h3>
				  <div class="form-group">
				  	<p>Elem School</p>
				    <label  class="sr-only">High School</label>
				    <div class="col-sm-3">
				    	<label>Name of School</label>
				      <select class="form-control" name="nm_sch_elem">
				      		<option>PLEASE SELECT</option>
				      </select>
				      </div>
				       <div class="col-sm-3">
				       	<label>Inclusive Year of Attendance</label>
				      <select class="form-control" name="yr_attnd_elem">
	
				      		<option>PLEASE SELECT</option>
				      </select>
				      </div>
				       <div class="col-sm-3">
				       	<label>Honors/Awards Received</label>
				      <input type="text" required class="form-control" name="hnr_rcvd_elem" placeholder="Honors/Awards Received">
				    </div>
				  </div>
				  <div class="form-group">
				  	<p>High School</p>
				    <label  class="sr-only">High School</label>
				    <div class="col-sm-3">
				    	<label>Name of School</label>
				      <select class="form-control" name="nm_sch_hs">
				      		<option>PLEASE SELECT</option>
				      </select>
				      </div>
				       <div class="col-sm-3">
				       	<label>Inclusive Year of Attendance</label>
				      <select class="form-control" name="yr_attnd_hs">
	
				      		<option>PLEASE SELECT</option>
				      </select>
				      </div>
				       <div class="col-sm-3">
				       	<label>Honors/Awards Received</label>
				      <input type="text" required class="form-control" name="hnr_rcvd_hs" placeholder="Honors/Awards Received">
				    </div>
				  </div>
				  </div>
				  <!--
				  <div class="form-group">
				  	<h3><strong>III. MEMBERSHIP IN CLUB/ORGANIZATION</strong></h3>
				  <p>In School:</p>  
				  <p>Elementary</p>
				    <div class="col-sm-6">
				    	
				      <input type="text" required class="form-control" name="" placeholder="Name of Club">
				    </div>  
				      <div class="col-sm-6">
				      <input type="text" required class="form-control" name="" placeholder="Position">

				    </div>
				  </div>
				  <div class="form-group">
				 
				    <p>High School</p>
				    <div class="col-sm-6">
				    	
				      <input type="text" required class="form-control" name="" placeholder="Name of Club">
				  </div>
				       <div class="col-sm-6">
				      <input type="text" required class="form-control" name="" placeholder="Position">
				  
				    </div>
				  </div>
				 <p>Outside School</p>
				  <div class="form-group">
				  	
				    
				    <div class="col-sm-6">
				      <input type="text" required class="form-control" name="" placeholder="Name of Club">
				      </div>
				      <div class="col-sm-6">
				      <input type="text" required class="form-control" name="" placeholder="Position">
				  
				    </div>
				  </div>
				  -->
				  <div class="form-group">
				  	<h3><strong>IV. ABOUT YOURSELF</strong></h3>
				    <label  class="sr-only">Special Skills/Talents</label>
				    <div class="col-sm-6">
				      <textarea class="form-control" rows="3" name="skills" placeholder="Special Skills/Talents"></textarea><br />
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Hobbies/ Recreational Activities</label>
				    <div class="col-sm-6">
				       <textarea class="form-control" rows="3" name="hobbies" placeholder="Hobbies/ Recreational Activities"></textarea><br />
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Ambitions/Goals</label>
				    <div class="col-sm-6">
				       <textarea class="form-control" rows="3" name="goals" placeholder="Ambitions/Goals"></textarea><br />
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Guiding Principle in Life:</label>
				    <div class="col-sm-6">
				       <textarea class="form-control" rows="3" name="prcnple" placeholder="Guiding Principle in Life:"></textarea><br />
				    </div>
				  </div>
				  <div class="form-group">
				    <label  class="sr-only">Tell something about yourself:</label>
				    <div class="col-sm-6">
				      <textarea class="form-control" rows="3" name="abt_urslf" placeholder="Tell something about yourself:"></textarea><br />
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" name="submit" class="btn btn-default">Submit</button>
				    </div>
				  </div>
				</form>
			</div>
		</div>
		<script type="text/javascript">
			

		</script>
	<script type="text/javascript" href="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
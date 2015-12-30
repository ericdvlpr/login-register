<?php 
include 'core/init.php';
protect_page();
admin_protect();
include 'includes/overall/overall_header.php';
?>

			<div class="col-xs-12 col-sm-6 col-md-8" id="content">
					<div class="page-header">
						<h3>Dashboard <small>Control Panel</small></h3>
						<div id="crumb">
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Library</a></li>
						  <li class="active">Data</li>
						</ol>
						</div>
					</div>
					<div class="row">
					  <div class="col-xs-6 col-md-3">
					    <a href="#" class="thumbnail">
					      <img src="..." alt="...">
					    </a>

					    <table class="table">
						<tr>
							<td>Firstname</td>
							<td>Firstname</td>
							<td>Firstname</td>
						</tr>
						<tr>
							<td>Firstname</td>
							<td>Firstname</td>
							<td>Firstname</td>
						</tr>
						</table>
					  </div>
					  <div class="col-xs-6 col-md-3">
					    <a href="#" class="thumbnail">
					      <img src="..." alt="...">
					    </a>
					  </div>
					  <div class="col-xs-6 col-md-3">
					    <a href="#" class="thumbnail">
					      <img src="..." alt="...">
					    </a>
					  </div>
					   <div class="col-xs-6 col-md-3">
					    <a href="#" class="thumbnail">
					      <img src="..." alt="...">
					    </a>
					  </div>
					</div>
<div class="row">
						<div class="col-xs-6 col-sm-4"><?php include 'includes/widgets/user_count.php'; ?></div>
						<div class="col-xs-6 col-sm-4">col-xs-6 col-sm-4</div>
						<div class="col-xs-6 col-sm-4">col-xs-6 col-sm-4</div>
						</div>	
					</div>
					
			</div>

		</div>
</div>
<?php include 'includes/overall/overall_footer.php';?>
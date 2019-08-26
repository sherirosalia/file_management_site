<?php
	include 'header.php';
		
?>

<div class="content_wrapper" id="sign_up" style="margin-top: 40px;">
	<div class="row"> <!--header row-->
		<div class="col-md-4 col-xs-4 col-sm-4">
		</div>
		<div class="col-md-4 col-xs-4 col-sm-4"><h5 style ="margin-bottom: 20px; text-align: center">Sign up to access content:</h5>
		</div>
		<div class="col-md-4 col-xs-4 col-sm-4">
		</div>
	</div> <!--end of div header row-->
	
	<div class="row"> <!--row for form-->
		<div class="col-md-4 col-xs-4 col-sm-4">
		</div>
		<div class="col-md-4 col-xs-4 col-sm-4">
			<div class="form-group">
				<form class="form-signup" action="includes/signup.inc.php" method="POST" enctype="multipart/form-data">
					<input type="text" class="form-control" id="formGroupExampleInput" name="uid" placeholder="Username">
					<input type="text" class="form-control" id="formGroupExampleInput" name="mail" placeholder="Email">
					<input type="password" class="form-control" id="formGroupExampleInput" name="pwd" placeholder="Password">
					<input type="password" class="form-control" id="formGroupExampleInput" name="pwd-repeat" placeholder="Repeat password">
					<button type="submit" class="btn btn-warning btn-block" name="signup-submit">Sign Up</button>
				</form> <!--end of form-->
			</div>
		</div>
		
		<div class="col-md-4 col-xs-4 col-sm-4">
		</div>	
		
	</div> <!--end of div row for form-->

</div> <!--end of div content wrapper-->



	
															  
	
<?php
	require "footer.php";
?>
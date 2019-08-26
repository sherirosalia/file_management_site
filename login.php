<?php
	include 'header.php';
?>
	
<div class="content_wrapper" id="sign_up" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4"></div>
	<div class="col-md-4 col-xs-4 col-sm-4">
		<div class="form-group">
	 <form action="includes/login.inc.php" method="post">
		 <input type="text" name="mailuid" placeholder="Username">
		 <input type="password" name="pwd" placeholder="Password">
		 <button type="submit" name="login-submit">Login</button>	 
	 </form>
	 <a href="signout.php">Signup</a>
	 <form action="includes/logout.inc.php" method="post">

		 <button type="submit" name="logout-submit">Logout</button>	 
	 </form>

</div>
		<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4"></div>
		</div>
		</div>
<?php
	
	include 'footer.php';
?>
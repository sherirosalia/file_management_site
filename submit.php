<?php
	include 'header.php';
		
?>
<main>
<?php
	if (isset($_SESSION['userId'])){
	echo 
'<div id="content_wrapper">
	<div class="container">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Welcome to Our File Sharing Site!</h1>
				<p class="lead">Upload your files to share here.</p>
			</div>
		</div> <!--end of div jumbotron-->

		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="title" placeholder="Title">
			<input type="text" name="description" placeholder="Description of upload">
			<input type="file" name="audioFile"/>
			<input type="submit" value="Upload Audio" name="save_audio"/>
		</form> <!--end of form-->
	
	</div> <!--end of div container-->
</div> <!--end of div wrapper-->';
	}
	else{
			echo '<div id="content_wrapper">
	<div class="container">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Welcome to Our File Sharing Site!</h1>
				<p class="lead">You must be logged in to see this page.</p>
			</div>
		</div> <!--end of div jumbotron--><p class="login-status">You are logged out.</p>';
			}
?>

</main>  
	
<?php
	require "footer.php";
?>



	
	


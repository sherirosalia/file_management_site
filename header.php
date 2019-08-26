<?php
	session_start();
?>

<!DOCTYPE.html>
<html>
	
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body>	
<header>
	
<?php
if (isset($_SESSION['userId'])){
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="assets/rosalia.png" class="img-responsive" height="40px" width="40px" alt="rose logo"/></a> <!-- logo -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button> <!-- toggle that appears smaller screen -->

<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="select.php">Collection</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage Content</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="submit.php">Upload</a>
<a class="dropdown-item" href="delete.php">Delete</a>
</div> <!-- end of dropdown-menu -->
</li>
</ul>
</div> <!-- end of collapsable navigation links -->

<div class="collapse navbar-collapse" id="navbarNavDropdown" style="align:right">

<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
<ul class="navbar-nav">
<li>
<button class="btn btn-light" type="submit" name="logout-submit">Logout</button>
</li>
</ul>
</form>
</div> <!-- end of div -->

</nav> <!-- end of nav -->

';
}
  
else{

echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="assets/rosalia.png" class="img-responsive" height="40px" width="40px" alt="rose logo"/></a> <!-- logo -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button> <!-- toggle that appears smaller screen -->

<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="select.php">Collection</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage Content</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="submit.php">Upload</a>
<a class="dropdown-item" href="delete.php">Delete</a>
</div> <!-- end of dropdown-menu -->
</li>
</ul>
</div> <!-- end of collapsable navigation links -->

<div class="collapse navbar-collapse" id="navbarNavDropdown" style="align:right">

<form class="form-signin navbar-form form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
<ul class="navbar-nav">
<li>
<button class="btn btn-link navbar-right"><a href="signup.php" style="margin-right:20px">Register</a></button>
</li>
<li>
<input type="text" name="mailuid" placeholder="Username or Email" required autofocus>
</li>
<li>
<input type="password" name="pwd" placeholder="Password" required>
<button class="btn btn-light" type="submit" name="login-submit">Login</button>
</ul>
</form>
</div> <!-- end of div -->

</nav> <!-- end of nav -->

';
}




				
?>



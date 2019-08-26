<?php
 //$conn = new PDO('mysql:host = localhost;dbname=audiolibdb', 'root', ''); 
//$dbh = new PDO('mysql:localhost:8080; dbname=webd153', 'root', '');
$conn = mysqli_connect('mysql:host = localhost;dbname=audiolibdb', 'root', '');
echo 'I am connected to my database'; 

?>



<?php
/*$servername = "localhost";
$username = "root";
$password = "";

try {$dbh = new PDO("mysql:host=$servername;dbname=webd153", $username, $password);    
	 
// set the PDO error mode to exception    
	 
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    echo "Connected successfully";
	}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
} */ 
?>
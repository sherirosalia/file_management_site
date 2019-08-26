<?php
include 'header.php';
?>

<section>
<table class="table table-hover">
	<tr>
		<th scope="col">ID</th>
		<th scope="col">Title </th>
		<th scope="col">Description</th>
		<th scope="col">Audio File</th>	
	</tr>

	
<?php

//echo "upload.php file"
if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")
{
	$dir='uploads/';
	$audio_path=$dir.basename($_FILES['audioFile']['name']);
	$title=$_POST['title'];
    $description=$_POST['description'];

	if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
	{
		echo 'uploaded successfully.';

		saveAudio($title,$description,$audio_path);

		displayAudios();
		 
	 }
}


function displayAudios()
{
	$conn=mysqli_connect('localhost','root','','audiolibdb');
	if(!$conn)
	{
		die('server not connected');
	}
	
	$query="SELECT id, filename, title, description FROM audios";
	
	$result=mysqli_query($conn,$query);
	
	while($row=mysqli_fetch_array($result))
	{

		echo "<tr><td>".$row['id'] ."</td><td>".$row['description'] ."</td><td>".$row['title'] ."</td><td>".'<a href ="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>' ."</td></tr>";
		
		
	}
	
	mysqli_close($conn);
	// Redirect to another page
  	header('location: select.php');
}


function saveAudio($title,$description,$fileName)
{
	$conn=mysqli_connect('localhost','root','','audiolibdb');
	if(!$conn)
	{
		die('server not connected');
	}
	//$query="insert into audios(filename)values('{$fileName}')";
	//$query="insert into audios(title, description, filename)values('{$title},{$description},{$fileName}')";
	 $query = "INSERT INTO audios(title, description, filename)\n"
   . " VALUES ('$title', '$description', '$fileName')";
	
	mysqli_query($conn,$query);
	
	if(mysqli_affected_rows($conn)>0)
	{
		echo "audio file path saved in database.";
	}
	mysqli_close($conn);
	
}

?>



</table>
</section>

<?php
	require "footer.php";
?>




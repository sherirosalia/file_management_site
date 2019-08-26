
<!--code from this angel https://teamtreehouse.com/community/deleting-individual-sql-table-rows-via-php-->
<?php
include 'header.php';

if (isset($_SESSION['userId'])){
echo '<main>
<script>
var currentRow,id;
	
$(document).on("click",".deletedata",function() {
    id = $(this).attr("data-id"); // Get the clicked id for deletion 
    currentRow = $(this).closest("tr"); // Get a reference to the row that has the button we clicked
    $.ajax({
        type:"post",
        url:location.pathname, // sending the request to the same page we are on right now
        data:{"action":"deleteEntry","id":id},
        success:function(response){
            if (response == "ok") {
                // Hide the row nicely and remove it from the DOM once the animation is finished.
				
                currentRow.slideUp(500,function(){
                    currentRow.remove();

					
                })
            } else {
                // throw an error modally to let the user know there was an error
            }
			
	$(document).ajaxStop(function(){
    window.location.reload();
});
        }
    })
})


</script>
<div id="content_wrapper">
	<div class="container">
		<section>
			<table class="table table-hover">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Title </th>
					<th scope="col">Description</th>
					<th scope="col">Audio File</th>	
					<th scope="col">Delete</th>
				</tr>';


$conn=mysqli_connect('localhost','root','','audiolibdb');
// Delete logic
if (isset($_POST["action"]) && $_POST["action"] == "deleteEntry") {		echo 'connected';
    $id = isset($_POST["id"]) ? intval($_POST["id"]) : 0;
    if ($id > 0) {
        $query = "DELETE FROM audios WHERE id=".$id." LIMIT 1";
        $result = mysqli_query($conn, $query);
        echo "ok";
    } else {
        echo "err";
    }
    exit; // finish execution since we only need the "ok" or "err" answers from the server.
}
// Initial logic
//$conn=mysqli_connect('localhost','root','','audiolibdb');
$query = "SELECT * FROM audios ORDER BY id ASC";
$tabledata=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($tabledata))
//{
//	echo "<tr><td>".$row['id'] ."</td><td>".$row['title'] ."</td><td>".$row['description'] ."</td><td>".'<a href ="select.php?name='.$row['filename'].'">'.$row['filename'].'</a>' ."</td></tr>";
//}
	
	{
	echo '<tr>
		<td class="id">'.$row['id'].'</td>
		<td class="title">'.$row['title'].'</td>
		<td class="description">'.$row['description'].'</td>
		<td class="filename">'.$row['filename'].'</td>
		
		<td><button class="deletedata" data-id="'.$row['id'].'">Del</button></td>
	  </tr>';
	}
mysqli_close($conn);
echo '
</table>
</section>
</div>
</div>
</main>';
}else{
   echo ' Welcome to Our File Sharing Site! You must be logged in to see this page. You are logged out.';
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>

<?php	
include 'footer.php';
?>





	
	
	
	




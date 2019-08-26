<?php
include 'header.php';

if (isset($_SESSION['userId']))
{
echo '<main>
<div id="content_wrapper">
   <div class="container" id="audio_player">
       <section>   
           <audio controls>
               <source src="'.$_GET["name"].'" type="audio/mpeg">
           </audio>
       </section>
   </div>
   <div class="container">
       <section>
           <table class="table table-hover">
               <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Title </th>
                   <th scope="col">Description</th>
                   <th scope="col">Audio File</th>
               </tr>';

$conn=mysqli_connect('localhost','root','','audiolibdb');
$query="SELECT id, filename, title, description FROM audios";
$result=mysqli_query($conn,$query);
  
   while($row=mysqli_fetch_array($result))
   {
   echo "<tr><td>".$row['id'] ."</td><td>".$row['title'] ."</td><td>".$row['description'] ."</td><td>".'<a href ="select.php?name='.$row['filename'].'">'.$row['filename'].'</a>' ."</td></tr>";
   }
       mysqli_close($conn);

       echo '
       </table>
       </section>
       </div>
       </div>
       </main>';
  
}
else{
       echo ' Welcome to Our File Sharing Site! You must be logged in to see this page. You are logged out.';
   }
include 'footer.php';
?>
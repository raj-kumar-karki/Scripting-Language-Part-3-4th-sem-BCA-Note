<?php 
$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");
$sql = "UPDATE st set name='Ram' where roll=104";
mysqli_query($conn, $sql); 
echo "table updated successfully";

 ?>
<?php 

$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");
$sql = "select * from st"; 
$result = mysqli_query($conn, $sql) or die ("query failure");
while($row = mysqli_fetch_assoc($result))
{
	print_r($row);
}

 ?>
<?php 
include 'config.php';

$sql = "DELETE FROM st WHERE name ='Rajkumarkarki'";
mysqli_query($conn,$sql) or die ("query failure");
echo "record deleted successfully";


 ?>
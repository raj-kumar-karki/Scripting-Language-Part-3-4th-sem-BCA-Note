<?php 
$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");
$sql = "INSERT INTO st values (101,'RajkumarKarki','America')";
mysqli_query($conn, $sql) or die ("query failure");
echo "data inserted successfully";



 ?>
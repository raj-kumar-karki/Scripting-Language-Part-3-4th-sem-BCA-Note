<?php 
$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");
$sql = "create table st(roll int, name varchar(50), address varchar(50))";
mysqli_query($conn, $sql) or die ("query failure");
echo "table created successfully";


 ?>
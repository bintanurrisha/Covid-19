<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','covid-19');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];



// database insert SQL code
$sql = "INSERT INTO `subcriber_table` (`subscribe_Id`, `name`, `email`) VALUES ('0', '$name', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
header('location:index.php');
?>
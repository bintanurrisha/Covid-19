<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','covid-19');

// get the post records
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$email = $_POST['email'];
$number = $_POST['number'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `contact_form` (`contact_Id`, `firstdName`,`lastdName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$firstName','$lastName', '$email', '$number', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
header('location:index.php');
?>
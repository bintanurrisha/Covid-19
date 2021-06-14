<?php
//session_start();

include('database/dbconfig.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

if (!isset($_SESSION)) {
  session_start();
}

if(!$_SESSION['username'])
{
    header("Location: login.php");
}
?>
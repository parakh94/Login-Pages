<?php 
include ("connect.php");
?>
<?php
$username=$_POST['username'];
//echo $username."<br />";
$password=$_POST['password'];
//echo $password."<br />";

$sql="INSERT INTO user_data (username,password)
VALUES
('$username','$password')";
 
if (!mysql_query($sql,$_connection))
  {
  die('Error: ' . mysql_error());
  }
header("Location: home.php");
exit();
 
?>

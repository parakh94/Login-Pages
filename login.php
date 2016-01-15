<?php 
include ("connect.php");
?>
<?php

$username=$_POST['username'];
//echo $username."<br />";
$password=$_POST['password'];
//echo $password."<br />";
$result=mysql_query("SELECT * FROM user_data",$_connection);
if(!$result){
	die("Database query failed.".mysql_error());
}
while($row=mysql_fetch_array($result)){

	//echo $row["username"]. " ".$row["password"]."<br />";
	if($row["username"]==$username&&$row["password"]=$password){
		//echo $row["username"]. " ".$row["password"]."<br />";
		 header("Location: home.php"); 
		exit();
		
	}
}
?>
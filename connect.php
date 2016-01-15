<?php
$_connection=mysql_connect('localhost','root','');
if(!$_connection){
	die("Connection failed".mysql_error());
}
$db=mysql_select_db("users",$_connection);
if(!$db){
	die("Database selection failed".mysql_error());
}
?>
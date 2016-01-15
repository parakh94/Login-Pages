<?php 
include ("connect.php");
?>
<DOCTYPE html>
<html lang="en">
<?php include("header.php");
?>
Not a member   <a href="signup.php">Sign-up</a>

<form action="login.php" method="post">
	Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>


<?php
include("footer.php");
?>
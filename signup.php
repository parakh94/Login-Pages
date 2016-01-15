<?php 
include ("connect.php");
?>
<DOCTYPE html>
<html lang="en">
<?php include("header.php");
?>

<form action="data.php" method="post">
	Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Signup">
</form>

<?php
include("footer.php");
?>
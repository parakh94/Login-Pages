<?php 
include ("connect.php");
?>
<DOCTYPE html>
<html lang="en">
<?php include("header.php");
?>
Range
	<form action="range.php" method="post">
  <input type="checkbox" name="price" value="5k-10k" /> 5k-10k<br>
  <input type="checkbox" name="price" value="10k-15k" /> 10k-15k<br>
  <input type="checkbox" name="price" value="15k-20k" /> 15k-20k<br>
   <input type="submit" value="submit" />
      </form>
<br>
Company
    <form action="company.php" method="post">
  <input type="checkbox" name="company" value="HP" /> HP<br>
  <input type="checkbox" name="company" value="Acer" /> Acer<br>
  <input type="checkbox" name="company" value="Sony" /> Sony<br>
   </form>
   <br>

Product
   <form action="product.php" method="post">
  <input type="checkbox" name="product" value="Mobiles" /> Mobiles<br>
  <input type="checkbox" name="product" value="Laptops" /> Laptops<br>
  <input type="checkbox" name="product" value="Accessories" /> Accessories<br>
   </form>
<?php
include("footer.php");
?>


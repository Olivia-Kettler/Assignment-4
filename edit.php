<?php
require_once('creatingFile.php');
	modifyJSON('data.json',$_POST,$_GET['id']);
	print_r($_POST);
$order=readJSON('data.json',$_GET['id']);//to put values into form
?>
<html>	
	<form action="edit.php" method="POST">
	Name:
	<input type="text" name="name" value="<?=$order['name']?>"><br>
	Order:
	<br>
	<input type="radio" name="order" value="Burger Combo">
	<label for="Burger Combo">Burger Combo</label><br>
	<input type="radio" name="order" value="Shake Combo">
	<label for="Shake Combo">Shake Combo</label><br>
	<input type="radio" name="order" value="Fries Combo">
	<label for="Fries Combo">Fries Combo</label><br>
	How many?
	<br>
	<input type="number" name="quantity" value="<?=$order['quantity']?>"><br>
	Special Requests:
	<br>
	<textarea name="request" rows="5" cols="30"><?=$order['request']?></textarea>
	<br>
	<button type="submit">Submit</button><br><br>
	<a href="index.php">Home</a>
	</form>
</html>
<?php
require_once('creatingFile.php');

if(isset($_POST)){//if something is in POST
	//process data
	writeJSON('data.json',$_POST,'a');
	print_r($_POST);
}else{
	
}
?>
<html>	
	<form action="create.php" method="POST">
	Name:
	<input type="text" name="name"><br>
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
	<input type="number" name="quantity"><br>
	Special Requests:
	<br>
	<textarea name="request" rows="5" cols="30"></textarea>
	<br>
	<button type="submit" value="submit">Submit</button> <br>
	<a href ="index.php">Home</a>
	</form>
</html>
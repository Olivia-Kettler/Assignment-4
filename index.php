<?php

//	include('data.php');
//	$stock=file_get_contents('data.json');
//	$flowers=json_decode($stock,true);
		$orders=jsonToArray('data.json');
		
	function jsonToArray($file){
		return json_decode(file_get_contents($file),true);
		
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Burger Place</title>
	<style>
		body {background-color: #ffdd99;}
		h1 {color: #ffffff;}
	</style>
  </head>
  <body>
  <div class="container">
    <h1>Orders Placed</h1>
	<a type="button" href="create.php" class="btn btn-secondary btn-lg">Add Order</a>
	<br><br>
	<?php
	for($i=0;$i<count($orders);$i++){
		echo '<div class="media">
  <div class="media-body">
    <h5 class="mt-0">'.$orders[$i]['name'].' '. $orders[$i]['order'].'</h5>
    <a class="btn btn-primary" href="detail.php?id='.$i.'" role="button">Details</a>
	<a class="btn btn-primary" href="edit.php?id='.$i.'" type="button">Edit</a>
	<a class="btn btn-primary" href="delete.php?id='.$i.'" type="button">Delete</a>
  </div>
</div>';
		echo '<br>';
	}
	?>
	
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
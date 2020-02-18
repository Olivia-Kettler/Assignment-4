<?php
require_once('creatingFile.php');
deleteJSON('data.json',$_GET['id']);
print_r($_POST);
?>
<html>
<a href="index.php">Home</a>
</html>
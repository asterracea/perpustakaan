<?php 
	$conn = mysqli_connect("localhost","root","","perpustakaan");
	if (!$conn) {
		die("Database 404 not found! : ".mysqli_connect_error());
	}
 ?>
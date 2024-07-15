<?php 
include("config.php");

if(isset($_POST['tambah'])) {
	$title = $_POST['title'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	$kirim = mysqli_query($conn, "INSERT INTO buku(title, author, genre) VALUE ('$title','$author','$genre');");
	if ($kirim) {
		header('Location: index.php');
	} else {
		header('Location: index.php');
	}
} else {
	die("Akses Dilarang.......");
}

 ?>

<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="cont">
	<div>
    <div>
		<form action="backend.php" class="form_tambah" method="post">
      <div>
        <h2>Tambahkan Data Buku</h2>
      </div>
				<ul>
					<li><label for="title">TITLE</label></td>
					<li><input type="text" name="title" placeholder="Title Buku"></td>
				</ul>
				<ul>
					<li><label for="author">AUTHOR</label>
					<li><input type="text" name="author" placeholder="Author"></input>
				</ul>
        <ul>
					<li><label for="genre">GENRE</label>
					<select name="genre">
						<option>action</option>
						<option>fantasy</option>
						<option>Horor</option>
					</select></li>
				</ul>
				<ul>
					<li><input type="submit" name="tambah" value="tambah" class="submit"></li>
				</ul>
		</form>
	</div>
  </div>  
</body>
</html>
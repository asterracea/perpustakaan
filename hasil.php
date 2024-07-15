<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
	<h2>Data Buku</h2>
    <div class="container">
				<div class="heading_container"><h2>Data calon Mahasiswa</h2></div>
				<table class="table">
					<tr>
						<th style="word-wrap: break-word;">No</th>
						<th style="word-wrap: break-word;">Title</th>
						<th style="word-wrap: break-word;">Genre</th>
						<th style="word-wrap: break-word;">Aksi</th>
					</tr>
				<?php $result = mysqli_query($conn, "SELECT * FROM buku"); $i=1; ?>
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
							<td style="word-wrap: break-word;"> <?php echo $i; $i++; ?> </td>
							<td style="word-wrap: break-word;"> <?php echo $row['title']; ?> </td>
							<td style="word-wrap: break-word;"> <?php echo $row['genre']; ?> </td>
							<td style="word-wrap: break-word;">
							<?php echo "<a style='color:black;' href='form-edit.php?id=".$row['id']."'>edit</a> | ";?>
							</td>
						<?php }; ?>
					</tr>
				</table>
			</div>
	</div>
</body>
</html>
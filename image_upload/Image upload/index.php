<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<title>Snapshots</title>

</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com" style="background: transparent;">Snapshots</a>
		</div>
        <div id="image-container">
  
</div>

	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Upload Your Images</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<div class="form-inline">
				<label>Upload here</label>
				<input type="file" name="image" class="form-control" required="required"/>
				<button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Upload</button>
			</div>
		</form>
		<br />
		<div class="alert alert-info">My Gallery</div>
		<?php
		require 'conn.php';

		if (isset($_GET['delete'])) {
			$image_id = $_GET['delete'];
			$image_query = mysqli_query($conn, "SELECT * FROM `images` WHERE `id` = '$image_id'") or die(mysqli_error($conn));
			$image_row = mysqli_fetch_assoc($image_query);
			$image_location = $image_row['image_url'];

			if (unlink($image_location)) {
				mysqli_query($conn, "DELETE FROM `images` WHERE `id` = '$image_id'") or die(mysqli_error($conn));
				echo "<div class='alert alert-success'>Image deleted successfully.</div>";
			} else {
				echo "<div class='alert alert-danger'>Failed to delete the image.</div>";
			}
		}

		$query = mysqli_query($conn, "SELECT * FROM `images`") or die(mysqli_error($conn));
		while ($fetch = mysqli_fetch_array($query)) {
			?>
			<div style="border:1px solid #000; height:190px; width:190px; padding:4px; float:left; margin:10px;">
				<a href="<?php echo $fetch['location']; ?>"><img src="<?php echo $fetch['image_url']; ?>" width="180" height="180"/></a>
				<a href="index.php?delete=<?php echo $fetch['id']; ?>" onclick="return confirm('Are you sure you want to delete this image?');" style="text-decoration: none;"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</button></a>
			</div>
		<?php
		}
		?>
	</div>
    <script src="image.js"></script>
</body>
</html>

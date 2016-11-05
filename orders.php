<html>
<head>
	<link rel="stylesheet" type="text/css" href="custom.css"></head>
<body>
<?php include 'navigation.php';?>
	<div class="wrap">
		<h1>Classic Cars</h1>
		<div class="offer">

			<?php
				$query = "SELECT * FROM productlines";
				mysqli_query($db, $query) or die('Error querying database.');
				$result = mysqli_query($db, $query);
				$row = mysqli_fetch_array($result);
				while ($row = mysqli_fetch_array($result)) {
			?>
				<div class="item">
					<div class="image" id="<?php echo $row['productLine']; ?>"></div>
					<span class="product" ><?php echo $row['productLine']?></span>
					<span class="description"><?php echo $row['textDescription']?></span>
				</div><?php
				}
				mysqli_close($db);
			?>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="app.js" type="text/javascript"></script>
</body>
</html>
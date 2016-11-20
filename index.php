<html>
<?php include 'head.php';?>
<body>
<?php include 'navigation.php';?>
	<div class="wrap">
		<h1>Classic Cars</h1>
		<div class="offer">
			<?php
				$queryIndex = "SELECT * FROM productlines";
				mysqli_query($db, $queryIndex) or die('Error querying database.');
				$result = mysqli_query($db, $queryIndex);
				while ($row = mysqli_fetch_array($result)):;
			?>
				<div class="item">
					<div class="image" id="<?php echo $row['productLine']; ?>"></div>
					<span class="product" ><?php echo $row[0]; ?></span>
					<span class="description"><?php echo $row[1]; ?></span>
				</div><?php
				endwhile;
				mysqli_close($db);
			?>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="app.js" type="text/javascript"></script>
</body>
</html>
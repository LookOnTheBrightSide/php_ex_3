<html>
<head>
	<link rel="stylesheet" type="text/css" href="custom.css"></head>
<body>
	<?php include 'navigation.php';?>
	<div class="wrap">
	<div class="top">
		<h1>Select a product line and click submit</h1>
	</div><!-- /.top -->
		<?php include 'search.php';?>
		<!-- /.choose_section -->
	<?php
		if (isset($_GET['prod_filter']) && $_GET['prod_filter'] != "") {
			$prod = $_GET['prod_filter'];
			$query1 = "select * from products where productLine='$prod'";
			$number = "select count(*) from products where productLine='$prod'";
			mysqli_query($db, $query1) or die('Error querying database.');
			mysqli_query($db, $number) or die('Error querying database.');
			$result = mysqli_query($db, $query1);
	?>
		<div id="main_table">
			<table>
				<caption><h1><?php echo "Available {$prod}"; ?></h1></caption>
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Scale</th>
						<th>Vendor</th>
						<th>Description</th>
						<th>Quantity In Stock</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody id="first_row">
				<?php while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td class="code" >
							<?php echo $row['productCode']?></td>
						<td class="name" >
							<?php echo $row['productName']?></td>
						<td class="scale" >
							<?php echo $row['productScale']?></td>
						<td class="vendor">
							<?php echo $row['productVendor']?></td>
						<td class="prod_description">
							<?php echo $row['productDescription']?></td>
						<td class="stock">
							<?php echo $row['quantityInStock']?></td>
						<td class="price">
							<?php echo $row['buyPrice']?></td>
					</tr>
					<?php } mysqli_close($db);?>
				</tbody>
			</table>
		</div>
		<?php };?>
		</div>
	<?php include 'footer.php';?>
	<script src="app.js" type="text/javascript"></script>
</body>
</html>
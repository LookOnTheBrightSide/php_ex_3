<html>
<head>
	<link rel="stylesheet" type="text/css" href="custom.css"></head>
<body>
	<?php include 'navigation.php';?>
	<div class="wrap">
	<div class="top">
		<h1>Select a product line and click submit</h1>
	</div><!-- /.top -->
		<div class="choose_section">
			<!--  -->
			<?php
				$query = "SELECT DISTINCT productLine FROM products";
				$result = mysqli_query($db, $query);
			?>
			<form action="products_search.php" method="GET" class="product_form">
				<select>
					<?php while($row1 = mysqli_fetch_array($result)):;?>
					<option value="<?php echo $row1[0];?>">
						<?php echo $row1[0]; ?>
					</option>
					<?php endwhile ;?>
				</select>
				<button type="submit">Submit</button>
			</form>
			<!--  -->
		</div>
		<!-- /.choose_section -->
		<div id="main_table">
			<table>
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
					<?php
							$query1 = "select * from products";
							if (isset($_GET['prod_filter']) && $_GET['prod_filter'] != "") {
								$prod = $_GET['prod_filter'];
								echo $prod;
								$query1 = "select * from products where productLine='$prod'";
							}

							mysqli_query($db, $query1) or die('Error querying database.');
							$result = mysqli_query($db, $query1);
							$row = mysqli_fetch_array($result);
							while ($row = mysqli_fetch_array($result)) {?>
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
					<?php } mysqli_close($db);?></tbody>
			</table>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="app.js" type="text/javascript"></script>
</body>
</html>
<html>
<?php include 'head.php';?>
<body>
	<?php include 'navigation.php';?>
	<div class="wrap">
	<div class="top">
		<h1>Customers</h1>
	</div><!-- /.top -->
		<div id="main_table">
			<table>
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Phone</th>
						<th>City</th>
						<th>Country</th>
					</tr>
				</thead>
				<tbody id="first_row">
					<?php
							$query1 = "select * from  customers order BY country;";
							mysqli_query($db, $query1) or die('Error querying database.');
							$result = mysqli_query($db, $query1);
							$row = mysqli_fetch_array($result);
							while ($row = mysqli_fetch_array($result)) {?>
					<tr>
						<td class="vendor">
							<?php echo $row['contactFirstName']?></td>
						<td class="prod_description">
							<?php echo $row['phone']?></td>
						<td class="price">
							<?php echo $row['city']?></td>
						<td class="price">
							<?php echo $row['country']?></td>
					</tr>
					<?php } mysqli_close($db);?></tbody>
			</table>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="app.js" type="text/javascript"></script>
</body>
</html>
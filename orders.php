<html>
	<?php include 'head.php';?>
<body>
	<?php include 'navigation.php';?>
	<div class="wrap orders_page">
	<div id="oders_tables">
	<div class="top">
		<h1>Orders</h1>
	</div><!-- /.top -->

		<?php include 'in_process.php';?>
		<?php include 'get_details.php';?>
		<?php include 'cancelled.php';?>
		<?php include 'last_twenty.php';?>
	</div>
	<div id="detailed_view">
		<h3>Detailed view per order</h3>
		<table>
				<thead>
					<tr>
						<th>Order number</th>
						<th>Order Date</th>
						<th>Required Date</th>
						<th>Order Status</th>
						<th>Order Comment</th>
						<th>Product Code</th>
						<th>Product Line</th>
						<th>Product Name</th>
					</tr>
				</thead>
				<tbody id="details_per_order">
		</tbody>
</table>
</div><!-- /#detailed_view -->
</div><!-- /#oders_tables -->
	<?php include 'footer.php';?>
	<script src="app.js" type="text/javascript"></script>
</body>
</html>
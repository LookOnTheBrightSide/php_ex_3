<div class="display_table">
	<table>
	<caption>In Process</caption>
		<thead>
			<tr>
				<th>Order Number</th>
				<th>Order Date</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody id="first_row">
			<?php
					$query1 = "select * from orders where status='In process'";
					mysqli_query($db, $query1) or die('Error querying database.');
					$result = mysqli_query($db, $query1);
					$json = array();
					while ($row = mysqli_fetch_array($result)) {?>
			<tr>
				<td id="o_n" class="price item_id">
					<a href="#details"
					id="<?php echo $row['orderNumber'];?>"
					data-orderNumber="<?php echo $row['orderNumber'];?>"
					data-orderDate="<?php echo $row['orderDate'];?>"
					data-requiredDate="<?php echo $row['requiredDate'];?>"
					data-shippedDate="<?php echo $row['shippedDate'];?>"
					data-status="<?php echo $row['status'];?>"
					data-comments="<?php echo $row['comments'];?>"
					data-customerNumber="<?php echo $row['customerNumber'];?>"
					onclick="fill_modal(this.id)"
					><?php echo $row['orderNumber'];?></a>
				</td>
				<td id="o_d" class="price"><?php echo $row['orderDate'];?></td>
				<td id="sta" class="price"><?php echo $row['status'];?></td>
			</tr>
			<?php };?>
		</tbody>
	</table>
</div>

 <!-- echo '<a class="button-view" href="detailed_view.php?id='.$row['id'].'">View</a>'; -->
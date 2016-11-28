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
				<td class="price item_id" id="<?php echo $row['orderNumber'];?>" onclick="show_order_details(this.id)">
					<?php echo $row['orderNumber'];?>
				</td>
				<td id="o_d" class="price"><?php echo $row['orderDate'];?></td>
				<td id="sta" class="price"><?php echo $row['status'];?></td>
			</tr>
			<?php };?>
		</tbody>
	</table>
</div>


<div class="cancelled display_table">
	<table>
		<thead>
		<caption>Cancelled</caption>
			<tr>
				<th>Order Number</th>
				<th>Order Date</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody id="first_row">
			<?php
					$query2 = "select * from orders where status='cancelled'";
					mysqli_query($db, $query2) or die('Error querying database.');
					$result = mysqli_query($db, $query2);
					while ($row = mysqli_fetch_array($result)) {?>
			<tr>
				<td class="price item_id" id="<?php echo $row['orderNumber'];?>" onclick="show_order_details(this.id)">
					<?php echo $row['orderNumber'];?>
				</td>
				<td id="o_d" class="price"><?php echo $row['orderDate'];?></td>
				<td id="sta" class="price"><?php echo $row['status'];?></td>
			</tr>

			<?php } ;?>
		</tbody>
	</table>
</div>
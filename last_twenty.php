<div class="display_table main_table">
<table>
	<thead>
	<caption>Last 20</caption>
		<tr>
			<th>Order Number</th>
			<th>Order Date</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody id="first_row">
		<?php
				$query3 = "select * from orders order by orderDate desc limit 0, 20";
				mysqli_query($db, $query3) or die('Error querying database.');
				$result = mysqli_query($db, $query3);
				while ($row = mysqli_fetch_array($result)) {?>
			<tr>
				<td class="price item_id" id="<?php echo $row['orderNumber'];?>" onclick="show_order_details(this.id)">
					<?php echo $row['orderNumber'];?>
				</td>
				<td id="o_d" class="price"><?php echo $row['orderDate'];?></td>
				<td id="sta" class="price"><?php echo $row['status'];?></td>
			</tr>
		<?php } mysqli_close($db);?></tbody>
</table>
</div>
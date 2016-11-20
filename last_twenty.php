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
		<?php } mysqli_close($db);?></tbody>
</table>
</div>

<?php
	$db = mysqli_connect('localhost','root','spot','classicmodels') or die('Error connecting to MySQL server.');
	$id = NULL;
	if (isset($_POST["id"])) {
		$id = $_POST["id"];
	$query_detail = "SELECT `orders`.`orderNumber` AS `order_num`, `orders`.`orderDate` AS `order_date`, `orders`.`requiredDate` AS `order_req_date`,`orders`.`status` AS `order_status`, `orders`.`comments` AS `order_comment`, `products`.`productCode` AS `product_code`, `products`.`productLine` AS `product_line`, `products`.`productName` AS `product_name`FROM `orderdetails`INNER JOIN `orders` ON `orderDetails`.`orderNumber`=`orders`.`orderNumber`INNER JOIN `products` ON `orderDetails`.`productCode`=`products`.`productCode`WHERE `orders`.`orderNumber` = '$id' ";

	$result = mysqli_query($db, $query_detail) or die('Error querying database.');;
	$row = mysqli_fetch_array($result);
	while ($row = mysqli_fetch_array($result)) {?>
	<tr>
		<td class="vendor"><?php echo $row['order_num']?></td>
		<td class="prod_description"><?php echo $row['order_date']?></td>
		<td class="price"><?php echo $row['order_req_date']?></td>
		<td class="price"><?php echo $row['order_status']?></td>
		<td class="price"><?php echo $row['order_comment']?></td>
		<td class="price"><?php echo $row['product_code']?></td>
		<td class="price"><?php echo $row['product_line']?></td>
		<td class="price"><?php echo $row['product_name']?></td>
	</tr>

<?php }};?>

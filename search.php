<div class="choose_section">
	<!--  -->
	<?php
		$query = "SELECT DISTINCT productLine FROM products";
		$result = mysqli_query($db, $query);
	?>
	<form method="GET" action="products_search.php" class="product_form">
		<select name="prod_filter">
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
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="styles.css">
	<title>json Data</title>
</head>
<body>
	<h2>.json Data To Html Table</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
		</tr>

		<?php

			$json_data = file_get_contents("users.json");
			$products = json_decode($json_data, true);
			if(count($products) != 0){
				foreach ($products as $product) {
					?>
						<tr>
							<td>
								<?php echo $product['name']; ?>
							</td>
							<td>
								<?php echo $product['age']; ?>
							</td>
							<td>
								<?php echo $product['gender']; ?>
							</td>
						</tr>
					<?php
				}
			}
		?>
	</table>
</body>
</html>

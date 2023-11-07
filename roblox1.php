<html>
	<head>
		<title>ESHOP</title>
	</head>

	<body>
		<h1>ESHOP</h1>

		<?php
			$product = array("mys", "HDD", "SSD", "CPU");

			foreach ($product as $value){
				echo "$value ". "<br>";
			}

			

			for ($i = 0; $i < sizeof($product); $i++){
				echo $product[$i] . "<br> ";
			}
		?>


		
	</body>

</html>
<?php
session_start();
$search = $_GET['recherche'];
include "../services/tools.php";
include "../view/header.phtml";

$list = getProductList($search);


echo "<div class='flex'>";
	foreach($list as $key => $product) {

		$inStock = "";

	if ($product['is_active'] == 1) {

		$inStock = "<p class='green'>In stock</p>";
	} else {

		$inStock = "<p class='red'>Out of stock</p>";
	}

		echo "<div class='products'>";
			echo "<img src='$product[photo]'";
			echo "<p>In Sale : $product[name]</p>";
			echo "<p>Price : $product[price] €</p>";
			echo "<p>Quantity : $product[quantity]</p>";
			echo "<p>Description : $product[description]</p>";
			echo "$inStock";
			echo "<br>";
		echo "</div>";
	}
echo "</div>";


?>

	
</body>
</html>
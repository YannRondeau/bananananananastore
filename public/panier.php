<?php
session_start();
include "../services/tools.php";
include "../view/header.phtml";

$panier = $_SESSION['panier'];


foreach($panier as $id) {
	$products[] = getProduct($id);
}



echo "<div class='flex'>";
foreach($products as $product) {


	echo "<div class='products'>";
		echo "<img src='$product[photo]'";
		echo "<p>$product[name]</p>";
		echo "<p>Price : $product[price] €</p>";
		echo "<p>Quantity : $product[quantity]</p>";
		echo "<p>Description : $product[description]</p>";
		echo "<a href='removeProduct.php'>Remove product</a>";
		echo "<br>";
	echo "</div>";
}
echo "</div>";

?>



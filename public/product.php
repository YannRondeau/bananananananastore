<?php
session_start();
include "../services/tools.php";
include "../view/header.phtml";



if (isset($_GET['id'])) {

	$id = $_GET['id'];



	$product = getProduct($id);

	$inStock = "";

	if ($product['is_active'] == 1) {

		$inStock = "<p class='green'>In stock</p>";
		$cart = "<a href='addProductToCart.php?id_product=$product[id]'>Ajouter au panier</a>";
	} else {

		$inStock = "<p class='red'>Out of stock</p>";
		$cart = "<a style='display:none;' href='addProductToCart.php?id_product=$product[id]'>Ajouter au panier</a>";
	}


	echo "<div class='product'>";
		echo "<img src='$product[photo]'>";
		echo "<p>In Sale : $product[name]</p><br>";
		echo "<p>Price : $product[price] €</p><br>";
		echo "<p>Quantity : $product[quantity]</p><br>";
		echo "<p>Description : $product[description]</p><br>";
		echo "$inStock";
		echo "<br><p>$cart</p>";
		echo "<br>";
	echo "</div>";
}


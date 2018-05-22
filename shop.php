<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Banana Store</title>
</head>
<body>
	<h1><a href="shop.php">Welcome to Banana Store</a></h1>
	<form action="user.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<input class="center" type="text" name="user" placeholder="Username or Email">
			<input class="center" type="text" name="password" placeholder="password">
		</fieldset>
	</form>

	<form action="recherche.php" method="get">
		<input type="text" name="recherche">
		<button type="submit" value="search">Search</button>
	</form>
</body>
</html>

<?php


include "3wa-bananastore/public/test.php";

$list = getProductList();

echo "<div class='flex'>";
foreach($list as $key => $product) {

	echo "<div class='products'>";
		echo "<img src='$product[photo]'";
		echo "<p>In Sale : $product[name]</p>";
		echo "<p>Price : $product[price] €</p>";
		echo "<p>Quantity : $product[quantity]</p>";
		echo "<p>Description : $product[description]</p>";
		echo "<br>";
	echo "</div>";
}
echo "</div>";
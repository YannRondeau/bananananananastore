<?php

function pre($str) {
	echo "<pre>";
	print_r($str);
	echo "</pre>";
}

function getProductList($word = null) {
	include "connexion.php";

	if ($word == null) {
		$sql = "SELECT * FROM products";	
	} else {
		$sql = "SELECT * FROM products WHERE name LIKE '%$word%'";	
	}
	
	$statement = $db->query($sql, \PDO::FETCH_ASSOC);

	$products = [];

	foreach ($statement as $product)  {
		$products[] = $product;
	}

	return $products;
}

function getConnect($email, $password) {
	include "connexion.php";

	$sql = "SELECT * FROM user WHERE email LIKE '$email'";

	$statement = $db->prepare($sql);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);

	if ($user != null) {
		if ($password == $user['password']) {

			return $user;
		} else if ($password != $user['password']) {
			return 1;
		} 
	} else {
		return 2;
	}
}



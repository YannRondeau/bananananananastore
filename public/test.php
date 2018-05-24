<?php

function getProductList() {

	$user = 'root';
	$password = 'troiswa';

	$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $password);
	$db->exec('SET NAMES UTF8');

	$sql = "SELECT * FROM product";

	$statement = $db->prepare($sql);
	$statement->execute();
	$products = $statement->fetchAll(\PDO::FETCH_ASSOC);

	return $products;
}


$list = getProductList();


print_r($list);

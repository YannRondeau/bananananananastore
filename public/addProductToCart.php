<?php
session_start();
include "../services/tools.php";

if (!isset($_SESSION['panier'])) {

	$_SESSION['panier'] = [];
} 

if (isset($_GET['id_product'])) {

	$id_cart = $_GET['id_product'];

	array_push($_SESSION['panier'],$id_cart);
	
	header("location: ../public/panier.php");

	
}


?>
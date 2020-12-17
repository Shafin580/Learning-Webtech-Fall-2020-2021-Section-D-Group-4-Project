<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

require_once('../models/clientService.php');

$productId = $_REQUEST['msg'];

$productInfo = getStockProductInformation($productId);



?>
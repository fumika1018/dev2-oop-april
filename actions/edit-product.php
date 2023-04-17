<?php 

include '../classes/Products.php';
$product = new Products;

$product -> update($_POST);
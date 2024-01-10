<?php
// Main.php

require_once 'Product.php';
require_once 'ShoppingCart.php';
require_once 'OrderProcessor.php';

// Create products
$product1 = new Product(1, 'Laptop', 800.0);
$product2 = new Product(2, 'Smartphone', 400.0);

// Create a shopping cart
$cart = new ShoppingCart();

// Add items to the shopping cart
$cart->addItem($product1, 2);
$cart->addItem($product2, 1);

// Process the order
OrderProcessor::processOrder($cart);
?>

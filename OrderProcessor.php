<?php
// OrderProcessor.php

class OrderProcessor {
    public static function processOrder(ShoppingCart $cart) {
        echo "Processing Order...\n";
        // Additional order processing logic can be added here
        $cart->display();
        echo "Order Processed Successfully!\n";
    }
}
?>

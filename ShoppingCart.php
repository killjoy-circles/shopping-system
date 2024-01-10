<?php
// ShoppingCart.php

class ShoppingCart {
    private $items;

    public function __construct() {
        $this->items = [];
    }

    public function addItem(Product $product, $quantity) {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function display() {
        echo "Shopping Cart Contents:\n";
        foreach ($this->items as $item) {
            $product = $item['product'];
            $quantity = $item['quantity'];
            $product->display();
            echo "Quantity: $quantity\n";
        }
    }
}
?>

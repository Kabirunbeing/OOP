<?php
abstract class PaymentMethod {
    abstract public function processPayment(float $amount): string;
}
?>

<?php
require_once 'PaymentMethod.php';

class CreditCard extends PaymentMethod {
    public function processPayment(float $amount): string {
        return "Processed a credit card payment of $" . number_format($amount, 2);
    }
}

class PayPal extends PaymentMethod {    
    public function processPayment(float $amount): string {
        return "Processed a PayPal payment of $" . number_format($amount, 2);
    }
}

class Bitcoin extends PaymentMethod {
    public function processPayment(float $amount): string {
        return "Processed a Bitcoin payment of $" . number_format($amount, 2);
    }
}

function makePayment(PaymentMethod $paymentMethod, float $amount): string {
    return $paymentMethod->processPayment($amount);
}

$creditCardPayment = new CreditCard();
$payPalPayment = new PayPal();
$bitcoinPayment = new Bitcoin();

echo makePayment($creditCardPayment, 100.00) . "\n";
echo makePayment($payPalPayment, 200.00) . "\n";
echo makePayment($bitcoinPayment, 300.00) . "\n";
?>

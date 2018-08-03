<?php
// https://code.tutsplus.com/ru/tutorials/design-patterns-the-adapter-pattern--cms-22262
// Concrete Implementation of PayPal Class
class PayPal {

    public function __construct() {
        // Your Code here //
    }

    public function sendPayment($amount) {
        // Paying via Paypal //
        echo "Paying via PayPal: ". $amount;
    }
}

// Simple Interface for each Adapter we create
interface paymentAdapter {
    public function pay($amount);
}

class paypalAdapter implements paymentAdapter {

    private $paypal;

    public function __construct(PayPal $paypal) {
        $this->paypal = $paypal;
    }

    public function pay($amount) {
        $this->paypal->sendPayment($amount);
    }
}

$paypal = new paypalAdapter(new PayPal());
$paypal->pay('2629');
<!--
The Adapter Pattern is a structural design pattern that allows incompatible interfaces to work together by creating a (adapter) that converts one interface into another.

Purpose: Makes two incompatible interfaces compatible without changing their code.
Types:
Class Adapter (uses inheritance).
Object Adapter (uses composition). 
 
usage:

1. Integrating Legacy Systems
2. Working with Third-Party Libraries
3. Code Refactoring 
4. Bridging Object-Oriented and Non-Object-Oriented Code
-->














<?php
class OldPaymentSystem {
    public function processPayment($amount) {
        echo "Processing payment of $$amount using the old system.\n";
    }
}

class NewPaymentSystem {
    public function makePayment($amount) {
        echo "Making payment of $$amount using the new system.\n";
    }
}

class PaymentAdapter {
    private $newPaymentSystem;

    public function __construct(NewPaymentSystem $newPaymentSystem) {
        $this->newPaymentSystem = $newPaymentSystem;
    }

    public function processPayment($amount) {
        $this->newPaymentSystem->makePayment($amount);
    }
}

$oldPayment = new OldPaymentSystem();
$oldPayment->processPayment(100);  
echo "<br>";
$newPayment = new NewPaymentSystem();
$adapter = new PaymentAdapter($newPayment);  
$adapter->processPayment(200);  

?>